<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BookingTime;
use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    public function index()
    {
        $bookingtimes = BookingTime::all();

        $data = [
            'booktimes' => $bookingtimes,
        ];
        return view('reservation', $data);
    }

    public function selectTable(Request $request)
    {
        $rules = Validator::make($request->all(), [
            'people' => ['required', 'numeric', 'min:1'],
            'date' => ['required', 'date'],
            'time' => ['required']
        ]);

        $rules->validate();

        $tables = Table::where([
            ['capacity', '>=', $request->people]
        ])->get();

        $reservation_limit = 5;

        $a_tables = [];

        foreach ($tables as $table) {
            $reservations = Reservation::where([
                ['table_id', '=', $table->id],
                ['date', '=', $request->date]
            ])->get();

            if (count($reservations) < $reservation_limit) {
                array_push($a_tables, $table);
            }
        }

        foreach ($a_tables as $table) {
            $reservation = Reservation::where([
                ['table_id', '=', $table->id],
                ['date', '=', $request->date],
                ['booking_time_id', '=', $request->time]
            ])->get();

            // echo $reservation;
            // echo "<br>";
            // echo $table->id, $request->date, $request->time;
            // echo "<br>";

            if (!$reservation->isEmpty()) {
                // echo $table->id;
                // echo "<br>";
                $key = array_search($table, $a_tables, TRUE);
                // echo $key;
                // echo "<br>";
                unset($a_tables[$key]);
            }
        }

        // dd($a_tables);

        if (empty($a_tables)) {
            echo "No tables available, please try again";
            return redirect('/reservation');
        }


        $data = [
            'details' => $request,
            'tables' => $a_tables
        ];

        return view('select-table', $data);
    }

    public function addReservation(Request $request)
    {

        $res = new Reservation;

        $res->user_id = Auth::user()->id;
        $res->table_id = $request->table;
        $res->pax = $request->people;
        $res->date = $request->date;
        $res->booking_time_id = $request->time;

        $code = str_pad(rand(pow(10, 5 - 1), pow(10, 5) - 1), 5, '0', STR_PAD_LEFT);
        $res->code = $code;

        $res->save();

        // $result = Reservation::where([
        //     ['user_id', '=', Auth::user()->id],
        //     ['table_id', '=', $request->table],
        //     ['pax', '=', $request->people],
        //     ['date', '=', $request->date],
        //     ['booking_time_id', '=', $request->time]
        // ])->first();

        // BookingTime::where

        $data = [
            // 'table' => $request->table,
            // 'pax' => $request->people,
            // 'date' => $request->date,
            // 'time' => $request->time
            'res' => $res
        ];

        return view('reservation-accepted', $data);
    }

    public function displayAll(){
        $reservations = Reservation::all();

        return view('view-reservation-admin', compact('reservations'));
    }
}

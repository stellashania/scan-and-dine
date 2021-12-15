<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservation');
    }

    public function selectTable(Request $request)
    {
        $rules = Validator::make($request->all(), [
            'people' => ['required', 'numeric', 'min:1'],
            'date' => ['required', 'date'],
            'time' => ['required', 'date_format:H:i']
        ]);

        $rules->validate();

        $tables = Table::where([
            ['availability', '=', True],
            ['capacity', '>=', $request->people]
        ])->get();

        $data = [
            'details' => $request,
            'tables' => $tables
        ];

        return view('select-table', $data);
    }

    public function addReservation(Request $request)
    {
        if ($request->btn == "book") {
            $res = new Reservation;

            $res->user_id = Auth::user()->id;
            $res->table_id = $request->table;
            $res->pax = $request->people;
            $res->date = $request->date;
            $res->time = $request->time;
            $res->code = str_pad(rand(pow(10, 5 - 1), pow(10, 5) - 1), 5, '0', STR_PAD_LEFT);

            $res->save();

            $table = Table::find($request->table);

            $table->availability = False;

            $table->update();

            return redirect('/home');
        } else {

            return redirect('reservation');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Reservation;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //

    public function viewCategory()
    {
        $categoryData = Category::all();

        $data = [
            'categories' => $categoryData
        ];
        return view('category', $data);
    }

    public function viewMenuBasedOnCategory(Request $request)
    {
        $catId = $request->catId;
        $menus = Menu::where(
            'category_id',
            '=',
            $request->catId
        )->get();
        $data = [
            'menus' => $menus,
            'catId' => $catId
        ];

        // ?????
        if ($request->session()->has('reservation_id')) {
            $catId = $request->catId;
            $code = $request->session()->get('code');

            $code = Reservation::where(
                'code',
                '=',
                $code
            )->get();
            $menus = Menu::where(
                'category_id',
                '=',
                $catId
            )->get();
            if ($code->first()) {
                $data = [
                    'menus' => $menus,
                ];

                // return view('menu', $data);
                return redirect('menu/' . $catId)->with($data);
            } else {
                $data = [
                    'error' => "Invalid Code!",
                    'menus' => $menus,
                    'catId' => $request->catId
                ];
                return view('locked-menu', $data);
            }
        } else {
            return view('locked-menu', $data);
        }
        // ?????

        // return view('locked-menu', compact('catId', 'menus'));
    }

    public function unlockMenu(Request $request)
    {
        // $code = Reservation::where(
        //     'code',
        //     '=',
        //     $request->code
        // )->get();
        // $menus = Menu::where(
        //     'category_id',
        //     '=',
        //     $request->catId
        // )->get();
        // if ($code->first()) {
        //     $data = [
        //         'menus' => $menus,
        //     ];

        //     $reservation = Reservation::where('code', $request->code)->first();

        //     session(['reservation_id' => $reservation->id]);
        //     session(['code' => $request->code]);

        //     return view('menu', $data);
        // } else {
        //     $data = [
        //         'error' => "Invalid Code!",
        //         'menus' => $menus,
        //         'catId' => $request->catId
        //     ];
        //     return view('locked-menu', $data);
        // }

        // if ($request->session()->has('reservation_id')){
        //     return view('menu/' . $catId)->with($data);
        // }


        if ($request->session()->has('reservation_id')) {
            $code = Reservation::where(
                'code',
                '=',
                $request->session()->get('code')
            )->get();
            $menus = Menu::where(
                'category_id',
                '=',
                $request->catId
            )->get();
            if ($code->first()) {
                $data = [
                    'menus' => $menus,
                ];

                $reservation = Reservation::where('code', $request->code)->first();

                if ($request->session()->has('reservation_id')) {
                    return view('menu', $data);
                } else {
                    session(['reservation_id' => $reservation->id]);
                    session(['code' => $request->code]);
                    return view('menu', $data);
                }
            } else {
                $data = [
                    'error' => "Invalid Code!",
                    'menus' => $menus,
                    'catId' => $request->catId
                ];
                return view('locked-menu', $data);
            }
        } else {
            $code = Reservation::where(
                'code',
                '=',
                $request->code
            )->get();
            $menus = Menu::where(
                'category_id',
                '=',
                $request->catId
            )->get();
            if ($code->first()) {
                $data = [
                    'menus' => $menus,
                ];

                $reservation = Reservation::where('code', $request->code)->first();

                session(['reservation_id' => $reservation->id]);
                session(['code' => $request->code]);

                return view('menu', $data);
            } else {
                $data = [
                    'error' => "Invalid Code!",
                    'menus' => $menus,
                    'catId' => $request->catId
                ];
                return view('locked-menu', $data);
            }
        }
    }
}

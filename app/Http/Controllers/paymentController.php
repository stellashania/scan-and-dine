<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class paymentController extends Controller
{
    public function payForm(){
        return view('payment');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class HomeController extends Controller
{
    public function index(){
        $trains = Train::where('orario_di_partenza','like', '2022-05-24')->get();
        return view('home', ['trains'=>$trains]);
    }
}


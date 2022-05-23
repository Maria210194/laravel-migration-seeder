<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trains;

class HomeController extends Controller
{
    public function index(){
        $trains = Trains::all();
    //qui potrei avere ad esempio
        //$data=[
            //'name' => 'Mary'
                //per richiamare questi dati strutturo così il return:
            //return view('home', compact('data'));]

        return view('home', );
    }
}


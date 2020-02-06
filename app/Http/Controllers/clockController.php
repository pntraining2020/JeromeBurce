<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\name;
use Carbon\Carbon;
use App\clockdetails;
class clockController extends Controller
{
    public function show()
    {
        $names =name::all();  
        // dd($names);     
        return view('welcome',compact('names'));
    }

    public function clockin()
    {
        $current = new Carbon();
        $time=$current->toTimeString(); 
        dd($time);
        return view('1',compact('time'));

    return $hours . ':' . $seconds;
        return view('welcome',compact('names'));
    }
    public function clockout()
    {

    }
    public function start()
    {

    }
    public function end()
    {

    }
    public function totaltimework(){

    }
    public function totalbreaks()
    {

    }
}

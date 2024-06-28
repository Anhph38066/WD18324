<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinController extends Controller
{
    function index(){
        return view('tin');
    }
    function getTin($id){
        return view('tin', ['tin' => $id]);
    }
}

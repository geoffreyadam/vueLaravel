<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AppController extends Controller
{
    public function index(){
        $starNumber = DB::select('select * from `stars`');
        dd($starNumber);
        return view("layouts/app", ['allStars' => 50]);
    }
}
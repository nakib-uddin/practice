<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Toure;

class ToureController extends Controller
{
    //
    function getData(){
        return Toure::all();
    }
}

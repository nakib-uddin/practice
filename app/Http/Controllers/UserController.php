<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function fruite(){
        return "I am from UserControllers Fruite Function";
    }

    public function about() {

        $number = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ];

        return view( 'about', [ 'item' => $number ] );

    }

    public function display($id, $name)
    {
        // Your logic here using $id and $name
        return view('datapass', compact('id', 'name'));
    }

}

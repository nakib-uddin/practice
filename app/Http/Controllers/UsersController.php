<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Practise;


class UsersController extends Controller
{
   
   function getData(){
      return Practise::all();
  }

   
   public function home(){
      return view('home');
   }
   public function contact(){
      return view('contact');
   }
   public function about(){
      return view('about');
   }
}

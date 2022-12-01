<?php

namespace App\Http\Controllers;
use App\Models\Pages;
use Illuminate\Http\Request;

class HomeController extends Controller
{
      public function index(){
        $pages = Pages::orderby('id','desc')->paginate(15);
        
        return view('home', ['pages'=> $pages]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index(){
        $pages = Pages::orderby('id','desc')->paginate(15);
        
        return view('pages', ['pages'=> $pages]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test2 extends Controller
{   public function welcome() {
    return view('welcome');
}
    public function index() {
        return view('index');
}
    public function about() {
        return view('about');
}
public function news() {
     $abc = 'afraf';
    return view('news' , compact('abc'));
}
public function product() {
    return view('product');
}
public function contact() {
    return view('contact');
}
    
}

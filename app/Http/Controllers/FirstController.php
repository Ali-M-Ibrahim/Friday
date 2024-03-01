<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index(){
        return "hello, I am index function";
    }
    public function create(){
        return "hello,I am create function";
    }
}

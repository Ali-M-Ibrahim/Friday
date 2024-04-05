<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WebsiteController extends Controller
{
    public function index(){
        $object = Product::find(1);
        $object2="hello";

//        if($data){
//            return view('firstpage',['object'=>$data,'object2'=>"hello"]);
//        }else{
//            return "not found";
//        }
//        return view('firstpage',compact('object','object2'));

        $this->sendData();
        return view('firstpage')->with('object',$object)
            ->with('object2',$object2);
    }



    public function sendData(){
        $object3= "this is from send data";
        \View::share(['object3'=>$object3]);
    }


    public function second(){
        return view('secondpage');
    }


    public function post(Request $request){
        return "I am post function";
    }

}

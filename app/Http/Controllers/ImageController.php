<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    public function index(){
        return view('imageform');
    }

    public function method1(Request $request){
        $filename= time(). "-" . $request->file('myfile')->getClientOriginalName();
        $request->file('myfile')->move('myImages',$filename);
        $obj = new Image();
        $obj->name=$request->file('myfile')->getClientOriginalName();
        $obj->path= 'myImages/'.$filename;
        $obj->save();
        return redirect()->route('display');
    }

    public function display(){
        $obj = Image::find(5);
        return view('displayImage')->with('obj',$obj);
    }



    public function method2(Request $request){
        $filename= time(). "-" . $request->file('myfile')->getClientOriginalName();
        $request->file('myfile')->storeAs('public/myImages',$filename);
        $obj = new Image();
        $obj->name=$request->file('myfile')->getClientOriginalName();
        $obj->path= 'storage/myImages/'.$filename;
        $obj->save();
        return redirect()->route('display');
    }


    public function method3(Request $request){
        $request->validate([
            'myfile'=>'required|mimes:png'
        ]);

$path = $request->file('myfile')->store('public/myImages');
$path_to_store = Str::replace('public', 'storage', $path);


        $obj = new Image();
        $obj->name=$request->file('myfile')->getClientOriginalName();
        $obj->path= $path_to_store;
        $obj->save();


return $path;


    }


}

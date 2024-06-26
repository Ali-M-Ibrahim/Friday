<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Type;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function __construct()
    {
//        $this->middleware('checktoken');
    }

    public function create()
    {
        $all = Type::all();
        return view('addShop')->with('types',$all);
    }

    public function create2()
    {
        $all = Type::all();
        return response()->json(["data"=>$all]);
    }


    public function store(Request $request)
    {

        $request->validate([
            'shopname'=>'required|min:3|max:10',
            'shoplocation'=>'required',
            'shoptype'=>'required'
        ],[
            'required'=>"this is my custom message"
        ]);

        $obj = new Shop();
        $obj->name = $request->shopname;
        $obj->location = $request->shoplocation;
        $obj->type_id = $request->shoptype;
        $obj->save();
        return redirect()->route('list-shop');
    }

    public function index(){
        $data = Shop::all();
        return view('listShope')->with('data',$data);
    }

    public function destroy($id){

        $data = Shop::find($id);
        $data->delete();
        return redirect()->route('list-shop');
    }


    public function edit($id){
        $data = Shop::find($id);
        $all = Type::all();
        return view('editShop')->with('object',$data)->with('types',$all);
    }

    public function update($id, Request $request)
    {
        $obj = Shop::find($id);
        $obj->name = $request->shopname;
        $obj->location = $request->shoplocation;
        $obj->type_id = $request->shoptype;
        $obj->save();
        return redirect()->route('list-shop');
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Type;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function create()
    {
        $all = Type::all();
        return view('addShop')->with('types',$all);
    }

    public function store(Request $request)
    {
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

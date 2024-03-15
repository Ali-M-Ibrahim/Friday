<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create1(){
        $obj = new Product();
        $obj->name = "Product 2";
        $obj->description = "This is my description";
        $obj->in_stock = true;
        $obj->save();
        $obj2 = new Product();
        $obj2->name = "Product 3";
        $obj2->description = "This is my description";
        $obj2->in_stock = true;
        $obj2->save();
        return response()->json(["message"=>"Product created"]);
    }

    public function create2($name,$description,$flag){
        $obj2 = new Product();
        $obj2->name = $name;
        $obj2->description = $description;
        $obj2->in_stock = $flag;
        $obj2->save();
        return response()->json(["message"=>"Product created"]);
    }

    public function create3(Request $request){
        $obj2 = new Product();
        $obj2->name = $request->name;
        $obj2->description = $request->input('description',"default description");
        $obj2->in_stock = $request->in_stock;
        $obj2->save();
        return response()->json(["message"=>"Product created"]);
    }

    public function create4(){
        Product::create([
            'name'=> "Product from method 2",
            'description'=> "description from method 2",
            'in_stock'=>1
        ]);

        Product::create([
            'name'=> "Product from method 3",
            'description'=> "description from method 3",
            'in_stock'=>1
        ]);

        Product::create([
            'name'=> "Product from method 3",
            'description'=> "description from method 3",
            'in_stock'=>1
        ]);
        return response()->json(["message"=>"Product created"]);
    }


    public function create5(Request $request){



        return response()->json(["message"=>"Product created"]);
    }

}

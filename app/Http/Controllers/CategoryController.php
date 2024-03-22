<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\credentials;
use App\Models\customer;
use App\Models\service;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function test(){
        $hello = new Category();
        $hello->name ="test";
        $hello->description ="hello description";
        $hello->save();

    }

    public function retrieve(){
        $obj = Category::find(1); // select * from categories where id=1
        return $obj;
    }

    public function getByCondition(){
        $obj = Category::where('name','test')->get(); // select * from categories where name = 'test1';
        return $obj;
    }
    public function updateById($id){
        // update categories set name="test updated", description="hello description updated" where id=$id;
        $hello = Category::find($id);
        $hello->name ="test updated";
        $hello->description ="hello description updated";
        $hello->save();
    }
    public function updateMass(){
        // update categories set name="test updated", description="hello description updated" where name=updatedddddd;
        Category::where('name','updatedddddd')->update([
           'name'=>"updatedddddd",
            'description'=>"this is the updated description"
        ]);
    }
    public function deleteById($id){
        $hello = Category::find($id);
        $hello->delete();
    }
    public function deleteMass(){
        Category::where('name','test')->delete();
    }

    public function testmodels(){

        $obk = customer::find(1);
        $cred = $obk->getCredentials;

        $accounts = $obk->getAccounts;

        $related_services = $obk->getServices;



//        $obj = credentials::find(1);
//        $cust = $obj->getCustomer;
//        return $cust;
    }












}


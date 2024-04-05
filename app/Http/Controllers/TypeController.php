<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Type::all();

        return view('listType')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addType');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $obj = new Type();
        $obj->name = $request->typename;
        $obj->save();
        return redirect()->route('type.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $obj = Type::find($id);
        return view('editType',['object'=>$obj]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $obj = Type::find($id);
        $obj->name = $request->typename;
        $obj->save();
        return redirect()->route('type.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $obj = Type::find($id);
        $obj->delete();
        return redirect()->route('type.index');
    }
}

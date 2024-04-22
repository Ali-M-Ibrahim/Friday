<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class API2Controller extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data= customer::all();

        return $this->SuccessResponse($data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new customer();
        $data->name='joe';
        $data->save();
        return $this->SuccessResponse("created");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = customer::find($id);
        $data->name='joe 22';
        $data->save();
        return $this->SuccessResponse("created");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = customer::find($id);
        $data->delete();
        return $this->SuccessResponse("bye joe");
    }
}

<?php
namespace App\Traits;

trait ApiResponse{

    public function SuccessResponse($data){
        return response()->json(["code"=>200,"message"=>"Success","data"=>$data]);
    }


    public function ErrorResponse($error){
        return response()->json(["code"=>500,"message"=>"Error has occured","error"=>$error]);
    }

}

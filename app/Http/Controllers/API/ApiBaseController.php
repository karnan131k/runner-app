<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiBaseController extends Controller
{
    public function sendResponse($result)
    {
        if($result!=null){
            $response = [
                'success' => true,
                'data' => $result,
                'status' => 200,
            ];
            
        }
        else{
            $response = [
                'success' => true,
            ];
        }
        return response()->json($response, 200);
    }

    public function sendError($error, $errorMessages = [], $code = 400)
    {
    	$response = [
            'success' => false,
            'message' => $error,
            'status'  => $code,
        ];
        if(!empty($errorMessages)){
            $response['message'] = $errorMessages;
        }
        return response()->json($response, $code);
    }
}

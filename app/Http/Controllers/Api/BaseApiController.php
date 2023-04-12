<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseApiController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($result, $message = '')
    {
        $response = [
            'success' => true,
            'message' => $message,
            'data' => $result,
        ];

        return response()->json($response, 200);
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError(string $error, int $httpCode = 500, string $errorCode = '', $errorDetails = [])
    {
    	$response = [
            'success' => false,
            'message' => $error,
            'code' => $errorCode,
        ];


        if(!empty($errorDetails)){
            $response['data'] = $errorDetails;
        }


        return response()->json($response, $httpCode);
    }
}

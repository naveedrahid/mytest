<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendSuccessResponse($result = [], $message = '', $status = 'success', $statusCode = Response::HTTP_OK)
    {
        return response()->json([
            'status' => $status,
            'status_code' => $statusCode,
            'results' => $result,
            'response' => ['message' => $message],
        ]);
    }

    public function sendErrorResponse($result = [], $message = '', $status = 'success', $statusCode = Response::HTTP_NOT_FOUND)
    {
        return response()->json([
            'status' => $status,
            'status_code' => $statusCode,
            'results' => $result,
            'response' => ['message' => $message],
        ]);
    }
}

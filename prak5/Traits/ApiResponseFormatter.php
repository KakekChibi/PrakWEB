<?php

namespace app\Traits;

trait ApiResponseFormatter
{
    public function apiResponse($status, $message, $data)
    {
        $response = [
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ];

        header('Content-Type: application/json');
        echo json_encode($response);
    }
}

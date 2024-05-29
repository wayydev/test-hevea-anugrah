<?php 
namespace App\Http\Helpers;

class Response
{
    public static function json($message, $status, $data, $meta)
    {
        return response()->json([
            'message' => $message,
            'data' => $data,
            'meta' => $meta,
        ], $status);
    }
};

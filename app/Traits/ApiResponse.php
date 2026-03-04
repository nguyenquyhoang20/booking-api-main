<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponse
{
    /**
     * Trả về kết quả thành công cho API.
     */
    public function successResponse(mixed $data, int $code = 200, string $message = 'Thành công'): JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data,
        ], $code);
    }

    /**
     * Trả về kết quả lỗi cho API.
     */
    public function errorResponse(string|array $message, int $code): JsonResponse
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'data' => null,
        ], $code);
    }
}

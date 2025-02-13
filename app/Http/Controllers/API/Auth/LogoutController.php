<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

class LogoutController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/v1/logout",
     *     summary="User logout",
     *     description="Logs out the authenticated user and revokes their token.",
     *     security={{"bearerAuth":{}}},
     *     tags={"Auth"},
     *     @OA\Response(response=200, description="Logged out successfully"),
     *     @OA\Response(response=401, description="Unauthorized - Token required")
     * )
     */
    public function __invoke(Request $request): JsonResponse
    {
        $request->user()->tokens()->delete();
        return response()->json([
            'success' => true,
            'message' => 'Logged out successfully.'
        ]);
    }
}

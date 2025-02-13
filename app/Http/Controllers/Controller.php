<?php

namespace App\Http\Controllers;

use OpenApi\Attributes as OA;

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="TeamChallenge Online Store API Documentation",
 *     description="TeamChallenge Online Store API",
 *     @OA\Contact(
 *         email="support@teamchallenge.com"
 *     ),
 *     @OA\License(
 *         name="MIT",
 *         url="https://opensource.org/licenses/MIT"
 *     )
 * )
 *
 * @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     type="http",
 *     name="Authorization",
 *     in="header",
 *     scheme="bearer"
 * )
 *
 * @OA\Server(url=L5_SWAGGER_SERVER_LOCAL, description="Local Server"),
 * @OA\Server(url=L5_SWAGGER_SERVER_DEV, description="Development Server"),
 * @OA\Server(url=L5_SWAGGER_SERVER_PROD, description="Production Server")
 */
abstract class Controller
{
    //
}

<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\ApiResponses;
use App\Http\Controllers\Controller;
use Illuminate\Auth\AuthenticationException;


class VerifyEmailController extends Controller
{
    use ApiResponses;
    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
    }

    public function resend()
    {
        try {
            if (auth()->user()->hasVerifiedEmail()) {
                return $this->sendSuccessResponse(
                    [
                        "email" => auth()->user()->email,
                        "email_verified" => auth()->user()->hasVerifiedEmail(),
                    ],
                    'Email already verified',
                    200
                );
            }

            auth()->user()->sendEmailVerificationNotification();

            return $this->sendSuccessResponse(
                [
                    "email" => auth()->user()->email,
                    "email_verified" => auth()->user()->hasVerifiedEmail(),
                ],
                'Verification link sent successfully',
                200
            );
        } catch (\Exception $e) {
            // Tangani kesalahan umum
            return response()->json([
                'status_code' => 500,
                'error' => 'Failed to resend verification link. Please try again.'
            ], 500);
        }
    }
}

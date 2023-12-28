<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\ApiResponses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    use ApiResponses;

    public function forgot(Request $request)
    {
        try {
            // Validasi input email
            $request->validate(['email' => 'required|email']);
            // Kirim email reset password
            $status = Password::sendResetLink(
                $request->only('email')
            );

            // Respon sesuai dengan status pengiriman email
            if ($status === Password::RESET_LINK_SENT) {
                return $this->sendSuccessResponse([], 'Reset link sent successfully', 200);
            } else {
                return $this->sendErrorResponse('Failed to send reset link. Please check your email address.', 400);
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Tangani kesalahan validasi
            return $this->sendValidationErrorResponse($e);
        } catch (\Exception $e) {
            // Tangani kesalahan umum
            return $this->sendErrorResponse('Failed to process the request. Please try again.', 500);
        }
    }
}

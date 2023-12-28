<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\ApiResponses;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{

    use ApiResponses;

    public function register(UserRequest $request)
    {
        try {


            // Buat pengguna
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'telepon' => $request->telepon,
                'pekerjaan' => $request->pekerjaan,
                'nik' => $request->nik,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'domisili' => $request->domisili,
                'kode_pos' => $request->kode_pos,
                'kota' => $request->kota,
                'kecamatan' => $request->kecamatan,
                'kelurahan' => $request->kelurahan,
                'desa' => $request->desa,
            ]);

            $user->assignRole("pemohon");

            $user->sendEmailVerificationNotification();

            return $this->sendSuccessResponse(
                [
                    'email' => $user->email,
                    'name' => $user->name,
                ],
                'Registration successful. Please check your email for verification.',
                201
            );
        } catch (ValidationException $validationException) {
            return $this->sendValidationErrorResponse($validationException);
        } catch (\Exception $e) {
            // Tangani kesalahan umum
            return $this->sendErrorResponse('Registration failed. Please try again.', 500);
        }
    }


    public function login(LoginRequest $request)
    {
        try {
    
            $credentials = [
                filter_var($request->input('identity'), FILTER_VALIDATE_EMAIL) ? 'email' : 'telepon' => $request->input('identity'),
                'password' => $request->input('password'),
            ];
    
            if (Auth::attempt($credentials, $request->input('remember_me', false))) {
                $user = Auth::user();
                $role = $user->getRoleNames();
                $token = $user->createToken('auth-token')->plainTextToken;
                $addedMessage = "";
    
                if (!$user->hasVerifiedEmail()) {
                    $addedMessage = " Harap verifikasi email Anda untuk mengakses semua fitur.";
                }
    
                if ($request->input('remember_me', false)) {
                    $addedMessage .= " Anda akan diingat.";
                }
    
                return $this->sendSuccessResponse(
                    [
                        'id' => $user->id,
                        'name' => $user->name,
                        'email' => $user->email,
                        'email_verified' => $user->hasVerifiedEmail(),
                        'role' => $role,
                        'token' => $token,
                    ],
                    "Login berhasil." . $addedMessage,
                    200
                );
            } else {
                throw ValidationException::withMessages([
                    'message' => ['email atau password tidak valid.'],
                ]);
            }
        } catch (ValidationException $validationException) {
            return $this->sendValidationErrorResponse($validationException);
        } catch (\Exception $e) {
            return $this->sendErrorResponse('Login gagal. Silakan coba lagi.', 500);
        }
    }
    

    public function getUserProfile(Request $request)
    {
        try {
            $user = Auth::user();

            if (!$user) {
                throw new \Exception('User not found.', 404);
            }

            $role = $user->getRoleNames();

            return $this->sendSuccessResponse(
                [
                    auth()->user(),
                ],
                'User profile retrieved successfully.',
                200
            );
        } catch (\Exception $e) {
            return $this->sendErrorResponse($e->getMessage(), $e->getCode());
        }
    }

    public function logout(Request $request)
    {
        try {
            $request->user()->currentAccessToken()->delete();

            return $this->sendSuccessResponse(
                [],
                'Logged out successfully.',
                200
            );
        } catch (\Exception $e) {
            // Tangani kesalahan
            return $this->sendErrorResponse($e->getMessage(), $e->getCode());
        }
    }
}

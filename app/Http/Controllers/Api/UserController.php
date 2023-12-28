<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use ApiResponses;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('roles')->get();
        return $this->sendSuccessResponse($users, 'get user successfully', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'telepon' => $request->input('telepon'),
            'pekerjaan' => $request->input('pekerjaan'),
            'nik' => $request->input('nik'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'alamat' => $request->input('alamat'),
            'domisili' => $request->input('domisili'),
            'kode_pos' => $request->input('kode_pos'),
            'kota' => $request->input('kota'),
            'kecamatan' => $request->input('kecamatan'),
            'kelurahan' => $request->input('kelurahan'),
            'desa' => $request->input('desa'),
        ]);

        $user->assignRole($request->input('roles'));

        return $this->sendSuccessResponse($user, 'User created successfully', 201);
    }

    public function show(User $user)
    {
        if (!$user) {
            return $this->sendErrorResponse('User not found', 404);
        }

        return $this->sendSuccessResponse($user, 'Get user successfully', 200);
    }

    public function update(UserRequest $request, User $user)
    {
        if (Auth::user()->hasRole('admin')) {
            $user->update([
                'name' => $request->filled('name') ? $request->input('name') : $user->name,
                'email' => $request->filled('email') ? $request->input('email') : $user->email,
                'password' => $request->filled('password') ? bcrypt($request->input('password')) : $user->password,
                'telepon' => $request->filled('telepon') ? $request->input('telepon') : $user->telepon,
                'pekerjaan' => $request->filled('pekerjaan') ? $request->input('pekerjaan') : $user->pekerjaan,
                'nik' => $request->filled('nik') ? $request->input('nik') : $user->nik,
                'tanggal_lahir' => $request->filled('tanggal_lahir') ? $request->input('tanggal_lahir') : $user->tanggal_lahir,
                'alamat' => $request->filled('alamat') ? $request->input('alamat') : $user->alamat,
                'domisili' => $request->filled('domisili') ? $request->input('domisili') : $user->domisili,
                'kode_pos' => $request->filled('kode_pos') ? $request->input('kode_pos') : $user->kode_pos,
                'kota' => $request->filled('kota') ? $request->input('kota') : $user->kota,
                'kecamatan' => $request->filled('kecamatan') ? $request->input('kecamatan') : $user->kecamatan,
                'kelurahan' => $request->filled('kelurahan') ? $request->input('kelurahan') : $user->kelurahan,
                'desa' => $request->filled('desa') ? $request->input('desa') : $user->desa,
            ]);

            $user->syncRoles($request->input('roles'));

            return $this->sendSuccessResponse($user, 'User updated successfully', 200);
        } else {
            return response()->json(['message' => 'This action is unauthorized.'], 403);
        }
    }

    public function updateProfile(UserRequest $request)
    {
        $user = Auth::user();

        $user->update([
            'name' => $request->filled('name') ? $request->input('name') : $user->name,
                'email' => $request->filled('email') ? $request->input('email') : $user->email,
                'password' => $request->filled('password') ? bcrypt($request->input('password')) : $user->password,
                'telepon' => $request->filled('telepon') ? $request->input('telepon') : $user->telepon,
                'pekerjaan' => $request->filled('pekerjaan') ? $request->input('pekerjaan') : $user->pekerjaan,
                'nik' => $request->filled('nik') ? $request->input('nik') : $user->nik,
                'tanggal_lahir' => $request->filled('tanggal_lahir') ? $request->input('tanggal_lahir') : $user->tanggal_lahir,
                'alamat' => $request->filled('alamat') ? $request->input('alamat') : $user->alamat,
                'domisili' => $request->filled('domisili') ? $request->input('domisili') : $user->domisili,
                'kode_pos' => $request->filled('kode_pos') ? $request->input('kode_pos') : $user->kode_pos,
                'kota' => $request->filled('kota') ? $request->input('kota') : $user->kota,
                'kecamatan' => $request->filled('kecamatan') ? $request->input('kecamatan') : $user->kecamatan,
                'kelurahan' => $request->filled('kelurahan') ? $request->input('kelurahan') : $user->kelurahan,
                'desa' => $request->filled('desa') ? $request->input('desa') : $user->desa,

        ]);

        return $this->sendSuccessResponse($user, 'Profile updated successfully', 200);
    }


    public function destroy(User $user)
    {
        $user->delete();
        return $this->sendSuccessResponse($user, 'User deleted successfully', 200);
    }
}

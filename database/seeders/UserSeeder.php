<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin Role',
            // 'roles_id' => 1,
            'email' => 'admin@perizinan.com',
            'password' => bcrypt('admin123'),
        ]);
        $admin->assignRole('admin');


        $dinas = User::create([
            'name' => 'dinas Role',
            // 'roles_id' => 2,
            'email' => 'dinas@perizinan.com',
            'password' => bcrypt('dinas123'),
        ]);
        $dinas->assignRole('dinas');

        $walikota = User::create([
            'name' => 'walikota Role',
            // 'roles_id' => 3,
            'email' => 'walikota@perizinan.com',
            'password' => bcrypt('walikota123'),
        ]);
        $walikota->assignRole('walikota');

        $kepala_dinas = User::create([
            'name' => 'kepala-dinas Role',
            // 'roles_id' => 4,
            'email' => 'kepala_dinas@perizinan.com',
            'password' => bcrypt('kepaladinas123'),
        ]);
        $kepala_dinas->assignRole('kepala-dinas');

        $penyelia = User::create([
            'name' => 'penyelia Role',
            // 'roles_id' => 5,
            'email' => 'penyelia@perizinan.com',
            'password' => bcrypt('penyelia123'),
        ]);
        $penyelia->assignRole('penyelia');

        $surveyor = User::create([
            'name' => 'surveyor Role',
            // 'roles_id' => 6,
            'email' => 'surveyor@perizinan.com',
            'password' => bcrypt('surveyor123'),
        ]);
        $surveyor->assignRole('surveyor');

        $auditor = User::create([
            'name' => 'auditor Role',
            // 'roles_id' => 7,
            'email' => 'auditor@perizinan.com',
            'password' => bcrypt('auditor123'),
        ]);
        $auditor->assignRole('auditor');

        $operator = User::create([
            'name' => 'operator Role',
            // 'roles_id' => 8,
            'email' => 'operator@perizinan.com',
            'password' => bcrypt('operator123'),
        ]);
        $operator->assignRole('operator');

        $pemohon = User::create([
            'name' => 'pemohon Role',
            // 'roles_id' => 9,
            'email' => 'pemohon@perizinan.com',
            'password' => bcrypt('pemohon123'),
        ]);
        $pemohon->assignRole('pemohon');

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'dinas',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'walikota',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'kepala-dinas',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'penyelia',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'surveyor',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'auditor',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'operator',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'pemohon',
            'guard_name' => 'web',
        ]);
    }
}

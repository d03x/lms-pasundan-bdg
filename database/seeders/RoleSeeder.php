<?php

namespace Database\Seeders;

use App\PermissionsEnum;
use App\RoleEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::firstOrCreate(['name' => PermissionsEnum::UPLOAD_MATERI->value]);
        Permission::firstOrCreate(['name' => PermissionsEnum::UPLOAD_TUGAS->value]);
        Permission::firstOrCreate(['name' => PermissionsEnum::BUAT_TUGAS->value]);
        Role::firstOrCreate(['name' => RoleEnum::ADMIN->value]);
        $siswa = Role::firstOrCreate(['name' => RoleEnum::SISWA->value]);
        $siswa->syncPermissions(PermissionsEnum::UPLOAD_TUGAS->value);
        $guru = Role::firstOrCreate(['name' => RoleEnum::GURU->value]);
        $guru->syncPermissions([
            PermissionsEnum::UPLOAD_MATERI->value,
            PermissionsEnum::BUAT_TUGAS->value,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use App\RoleEnum;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Role::create(['name' => RoleEnum::SISWA->value]);
        $user = User::first();
        $user->assignRole(RoleEnum::SISWA);
    }
}

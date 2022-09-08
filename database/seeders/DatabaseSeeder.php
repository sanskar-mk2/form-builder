<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'super_admin']);
        $user = User::factory()->create([
            'name' => env('SU_NAME'),
            'email' => env('SU_EMAIL'),
            'password' => Hash::make(env('SU_PASS')),
        ]);
        $user->assignRole($role);
    }
}

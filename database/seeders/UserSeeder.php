<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('password')
        ]);
        $role = Role::create([
            'name'=>'admin',
            'slug'=>'admin',
        ]);
        $role2 = Role::create([
            'name'=>'user',
            'slug'=>'user',
        ]);
        DB::table('user_roles')->insert([
            'user_id'=>$user->id,
            'role_id'=>$role->id
        ]);
    }
}

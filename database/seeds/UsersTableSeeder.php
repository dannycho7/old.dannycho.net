<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->delete();
        User::create([
        	'name' => 'Danny Cho',
        	'email' => env('ADMIN_EMAIL', false),
        	'password' => Hash::make(env('ADMIN_PASSWORD', false))
        ]);
        $this->command->info("Admin seeded to users table!");
    }
}

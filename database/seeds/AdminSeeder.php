<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->user_name = "admin";
        $user->email = "admin@iams.com";
        $user->password = bcrypt('secret');
        $user->role_id = \App\Common\Roles::ROLE_ADMIN;
        $user->status = true;
        $user->save();
    }
}

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
        $user->added_by_user_id = '1';
        $user->status = true;
        $user->save();
        $userProfile = new \App\UserRegistration();
        $userProfile->user_id = $user->id;
        $userProfile->first_name = 'Admin';
        $userProfile->last_name = 'IAMS';
        $userProfile->status = true;
        $userProfile->added_by_user_id = '1';
        $userProfile->save();
    }
}

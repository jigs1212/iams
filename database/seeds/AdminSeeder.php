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
        $userProfile->city = 'Calicut';
        $userProfile->state = 'Kerala';
        $userProfile->country = 'India';
        $userProfile->birthday = '2018/08/12';
        $userProfile->phone_off = '4952365365';
        $userProfile->extn = '12';
        $userProfile->mobile_no = '9876543210';
        $userProfile->status = true;
        $userProfile->added_by_user_id = '1';
        $userProfile->save();
    }
}

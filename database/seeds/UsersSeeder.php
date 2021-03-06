<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Membuat role admiin
        $adminRole = new Role();
        $adminRole->name ="admin";
        $adminRole->display_name ="admin";
        $adminRole->save();

        //Membuat role member
        $memberRole = new Role();
        $memberRole->name ="member";
        $memberRole->display_name ="member";
        $memberRole->save();

        //Membuat sample admin
        $admin = new User();
        $admin->name ="Admin Larapus";
        $admin->email ="admin@gmail.com";
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        //Membuat sample member
        $member = new User();
        $member->name ="Sample Member";
        $member->email ="member@gmail.com";
        $member->password = bcrypt('rahasia');
        $member->save();
        $member->attachRole($memberRole);

        //Membuat sample admin
        $admin->is_verified= 1;
        $admin->save();
        $admin->attachRole($adminRole);

        //Membuat sample member
        $member->is_verified= 1;
        $member->save();
        $member->attachRole($memberRole);
    }
}

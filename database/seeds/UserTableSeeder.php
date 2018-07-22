<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('slug','user')->first();
        $role_admin = Role::where('slug','admin')->first();
        $role_superadmin = Role::where('slug','super-admin')->first();
   
           $user1 = new User();
           $user1->name = 'normal user';
           $user1->email  = 'user@example.com';
           $user1->password = bcrypt('oh12345');
           $user1->save();
           $user1->roles()->attach($role_user);
   
   
   
          $user2 = new User();
          $user2->name = 'Administrator';
          $user2->email  = 'admin@example.com';
          $user2->password = bcrypt('oh12345');
          $user2->save();
          $user2->roles()->attach($role_admin);
   
   
   
          $user3 = new User();
          $user3->name = 'Super Administrator';
          $user3->email  = 'superadmin@example.com';
          $user3->password = bcrypt('oh12345');
          $user3->save();
          $user3->roles()->attach($role_superadmin);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Role();
        $data->role = 'Super Administrator';
        $data->slug = 'super-admin';
        $data->save();

        $data = new Role();
        $data->role = 'Administrator';
        $data->slug = 'admin';
        $data->save();

        $data = new Role();
        $data->role = 'User';
        $data->slug = 'user';
        $data->save();
    }
}

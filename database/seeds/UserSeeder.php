<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = "Admin";
        $role->save();

        $role = new Role();
        $role->name = "Teknisi";
        $role->save();        
        
        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 1;
        $user->save();
        
        $user = new User();
        $user->name = "Teknisi";
        $user->email = "teknisi@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 2;
        $user->save();
    }
}

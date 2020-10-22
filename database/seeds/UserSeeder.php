<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt('rahasia');
        $user->role_id = 1;
        $user->save();

        $user = new User();
        $user->name = "Teknisi";
        $user->email = "teknisi@gmail.com";
        $user->password = bcrypt('rahasia');
        $user->role_id = 2;
        $user->save();
    }
}

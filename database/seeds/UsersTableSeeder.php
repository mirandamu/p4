<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            ['jill@harvard.edu','Jill','helloworld'], 
            ['jamal@harvard.edu','Jamal','helloworld']
        ];

        $existingUsers = User::all()->keyBy('email')->toArray();

        foreach($users as $user) {
            if(!array_key_exists($user[0],$existingUsers)) {
                $user = User::create([
                    'email' => $user[0],
                    'name' => $user[1],
                    'password' => Hash::make($user[2]),
                ]);
            }
        }
    }
}

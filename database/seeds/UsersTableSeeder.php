<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'odutusin moses',
            'email' => 'odutusinmoses@gmail.com',
            'password' => bcrypt('bolarin'),
            'admin' => 1
            
        ]);

        App\AdminProfile::create([
            'user_id' => $user->id,
            'avatar' =>'admin/1.png'
           
        ]);
    }
}

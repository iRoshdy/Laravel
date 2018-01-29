<?php

use Illuminate\Database\Seeder;
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
        $user = App\User::create([
            'name'=>'Mohamed Roshdy',
            'email'=>'m.97@outlook.com',
            'password'=>bcrypt('123456'),
            'admin'=>1

        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatars' => 'upload/avatars/1.jpg',
            'about' => 'The administrator of the web site',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com',
            'twitter' => 'twitter.com'
        ]);
    }

}

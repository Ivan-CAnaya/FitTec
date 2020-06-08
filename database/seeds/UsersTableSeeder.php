<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Iván Cruz Anaya',
                'email' => 'ivan@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JHqS.dfXJZbOXSCYPBf6ae9.kcxDrp2F5ypicsoLbRVO90t7as2gO',
                'remember_token' => 'FQKOvqNP6pMtiCFa5cxYIZv8E0nksv7jBdoETYc2NkVxJ6TE0UdCXg8O4ld8',
                'settings' => '{"locale":"en"}',
                'deleted_at' => NULL,
                'created_at' => '2020-05-20 00:28:15',
                'updated_at' => '2020-05-30 00:52:12',
                'person_id' => NULL,
            ),
        ));
        
        
    }
}
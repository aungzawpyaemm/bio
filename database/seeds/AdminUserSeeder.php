<?php

use Illuminate\Database\Seeder;
use App\User;
class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'Ivan Stephan',
            'email' => 'azp.dev@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('azp1001@pj'),
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'role' => 'user',
            'password' => bcrypt('azp1001@pj'),
        ]);
    }
}

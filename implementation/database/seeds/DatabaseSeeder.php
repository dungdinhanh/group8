<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'full_name'=>'Dinh Anh Dung',
            'user_name'=>'dinhanhdung',
            'password' => bcrypt('123456'),
            'email'=> 'dinhanhdung@gmail.com',
            'role_id' => '1',
            'date_of_birth' => strtotime('21/11/1996')
        ]);

        DB::table('roles')->insert([
            'role' => 'Student'
        ]);

        DB::table('roles')->insert([
            'role' => 'Teacher'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       
        DB::table('admins')
        ->insert([
            'name' => 'David Delira',
            'email' => 'daviddelira@live.com',
            'password' => Hash::make('Jr140690@'),
            'image' => 'david.jpg',
            ]);

    }
}

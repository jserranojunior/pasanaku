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
                'name' => 'Jorge Serrano Junior',
                'email' => 'jorgeserranojunior@hotmail.com',
                'password' => Hash::make('carro'),
                'image' => 'jorge.jpg',
                ]);
    }
}

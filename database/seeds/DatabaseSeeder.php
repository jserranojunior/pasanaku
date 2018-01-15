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
        $date = date('Y-m-d h:i:s', time());

        DB::table('transacoes')
        ->insert([
            'id_user' => 1,
            'valor' => -100.38,
            'tipo' => 'deposito',
            'data_efetuada' => $date,
            'data_agendada' => $date,
            'pagamento_feito' => false,
            'created_at' => $date,
            'updated_at' => $date,
        ]);


/* 
$table->bigInteger('id_admin')->nullable();
            $table->boolean('pagamento_feito');
*/

        // $this->call(UsersTableSeeder::class);
       
        /*
            DB::table('users')
            ->insert([
                'name' => 'Cliente Pasanaku',
                'email' => 'cliente@cliente.com',
                'cpf' => '30968146600',
                'password' => Hash::make('12345'),
                'image' => 'cliente.png',
                ]);

                DB::table('admins')
                ->insert([
                    'name' => 'David Delira',
                    'email' => 'daviddelira@live.com',
                    'password' => Hash::make('Jr140690@'),
                    'image' => 'david.jpg',
                    ]);

                    DB::table('admins')
                    ->insert([
                        'name' => 'Jorge Serrano Junior',
                        'email' => 'jorgeserranojunior@hotmail.com',
                        'password' => Hash::make('carro'),
                        'image' => 'jorge.jpg',
                        ]);

                        */
    }
}

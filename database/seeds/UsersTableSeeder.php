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
        factory(App\User::class, 10)->create();
        // DB::table('users')->insert([
        //     'name' => 'Usuario teste 1',
        //     'email' => 'teste@teste.com',
        //     'password' => bcrypt('password'),
        // ]);
        // DB::table('users')->insert([
        //     'name' => 'Usuario teste 2',
        //     'email' => 'teste2@teste.com',
        //     'password' => bcrypt('password'),
        // ]);
    }
}

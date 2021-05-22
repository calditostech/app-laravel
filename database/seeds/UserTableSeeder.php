<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
             'name' => 'Ricardo Moreira',
             'email' => 'ricardo@teste.com.br',
             'password' => app('hash')->make('123456'),
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                [
                    'name' => 'admin',
                    'email' => 'admin@gmail.com',
                    'password' => bcrypt('12345'),
                    'role_id' => '1',
                ],
                
                [
                    'name' => 'victor',
                    'email' => 'victor@gmail.com',
                    'password' => bcrypt('1234'),
                    'role_id' => '0',
                ],
                [
                    'name' => 'maria',
                    'email' => 'maria@gmail.com',
                    'password' => bcrypt('5678'),
                    'role_id' => '0',
                ],          

            ]
        );
    }
}

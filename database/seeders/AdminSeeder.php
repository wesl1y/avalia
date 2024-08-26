<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'SUITEC',
            'second_name' => 'SEDUC',
            'cpf' => '92154195230',
            'registration' => 1221542955,
            'position' => 'GERENTE',
            'capacity' => 'SUITEC',
            'city' => 'MACEIÓ',
            'phone' => 82981739990,
            'email' => 'suitec@suitec.com.br',
            'password' => Hash::make('s3duc@suitec'),
        ]);
    }
}

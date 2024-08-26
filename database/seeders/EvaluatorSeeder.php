<?php

namespace Database\Seeders;

use App\Models\Evaluator;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EvaluatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::where('cpf', '92154195230')->first();

        Evaluator::create([
            'first_name' => 'SUITEC',
            'second_name' => 'SEDUC',
            'cpf' => '92154195230',
            'education' => 'TESTE',
            'state' => 'ALAGOAS',
            'city' => 'MACEIÓ',
            'bond' => 'CONTRATADO',
            'email' => 'suitec@suitec.com.br',
            'user_id' => $admin->id,
            'password' => Hash::make('s3duc@suitec'),
        ]);
    }
}

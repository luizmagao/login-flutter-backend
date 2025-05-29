<?php

namespace Database\Seeders;

use App\Models\Clinica;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClinicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $clinicas = [
            ['descricao' => 'Clinica 01'],
            ['descricao' => 'Clinica 02'],
            ['descricao' => 'Clinica 03'],
            ['descricao' => 'Clinica 04'],
            ['descricao' => 'Clinica 05'],
            ['descricao' => 'Clinica 06'],
            ['descricao' => 'Clinica 07'],
            ['descricao' => 'Clinica 08'],
            ['descricao' => 'Clinica 09'],
            ['descricao' => 'Clinica 10'],
            ['descricao' => 'Clinica 11'],
        ];
        foreach ($clinicas as $key => $value) {
            Clinica::updateOrCreate($value, $value);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContatoModel;

class ContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContatoModel::create(['nome' => 'Teste', 'email' => 'Teste123@123Teste.com']);
        ContatoModel::factory()->count(50)->create();
    }
}

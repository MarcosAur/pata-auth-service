<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->insert([
            [
                'name' => 'list-customers',
                'label' => 'Listar Clientes'
            ],
            [
                'name' => 'create-customers',
                'label' => 'Criar Clientes'
            ],
            [
                'name' => 'update-customers',
                'label' => 'Atualizar Clientes'
            ],
            [
                'name' => 'delete-customers',
                'label' => 'Deletar Clientes'
            ],
        ]);
    }
}

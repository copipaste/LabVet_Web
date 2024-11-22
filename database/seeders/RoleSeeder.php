<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'id' => 1,
            'name' => 'Administrador'
        ]);
        Role::create([
            'id' => 2,
            'name' => 'Doctor'
        ]);
        Role::create([
            'id' => 3,
            'name' => 'Cliente'
        ]);
    }
}

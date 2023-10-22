<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            ["name" => "Recursos Humanos"],
            ["name" => "Administración y Finanzas"],
            ["name" => "Ventas y Marketing"],
            ["name" => "Desarrollo de Software"],
            ["name" => "Servicio al Cliente"],
            ["name" => "Operaciones y Logística"],
            ["name" => "Diseño y Creatividad"],
            ["name" => "Desarrollo de Producto"],
            ["name" => "Investigación y Desarrollo (I+D)"],
            ["name" => "Legal y Cumplimiento"],
            ["name" => "Gestión de Proyectos"],
            ["name" => "Recursos Materiales y Logística"]
        ];

        foreach ($positions as $position) {
            Position::factory(1)->create($position);
         }

    }
}

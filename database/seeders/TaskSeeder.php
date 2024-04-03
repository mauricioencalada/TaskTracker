<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'titulo' => 'Tarea 1',
            'descripcion' => 'Descripción de la tarea 1',
            'slug'=>'primera tarea',
            'completed' => false,
            'start_date' => now()->subDays(1),
            'due_date' => now()->addDays(7),
        ]);
        Task::create([
            'titulo'=> 'Tarea 2',
            'descripcion' => 'Descripcion de la tarea 2',
            'slug'=>'segunda tarea',
            'completed'=> false,
            'start_date' => now()->subDays(2),
            'due_date' => now()->addDays(10),
        ]);
    }
}

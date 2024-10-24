<?php

namespace Database\Seeders;

use App\Http\Controllers\ProjectController;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::factory()->count(10)->create();
    }
}

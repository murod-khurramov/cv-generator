<?php

namespace Database\Seeders;

use App\Models\LanguageUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LanguageUser::factory()->create(10)->create();
    }
}

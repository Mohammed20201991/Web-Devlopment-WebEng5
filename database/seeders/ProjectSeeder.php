<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // if we want to reset auto increment to zero 
        DB::table('projects')->truncate();
        Project::factory()
        ->hasTracks(5)
        ->count(10)
        ->create();
    }
}

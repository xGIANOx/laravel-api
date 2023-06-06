<?php

namespace Database\Seeders;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $project = new Project();
            $project->title = $faker->sentence(5);
            $project->description = $faker->paragraphs(asText: true); 
            $project->img = $faker->imageUrl(category: 'projects', format: 'jpg');
            $project->link = $faker->sentence(5); 
            $project->repo_link = $faker->sentence(5); 
            $project->save();
        }
    }
}
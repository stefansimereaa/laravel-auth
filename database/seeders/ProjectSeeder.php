<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // creates 10 records
        for ($i = 0; $i < 10; $i++) {
            Project::create([
                'name' => "Project $i",
                'thumbnail' => 'https://picsum.photos/600/600',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit voluptate veritatis illum velit modi nam tempore fuga, aliquam magnam id. Magni consequuntur eligendi provident quod blanditiis labore eaque et natus.',
            ]);
        }
    }
}

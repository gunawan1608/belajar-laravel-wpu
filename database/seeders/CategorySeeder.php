<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'tags' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'tags' => 'UI UX',
            'slug' => 'ui-ux'
        ]);

        Category::create([
            'tags' => 'Machine Learning',
            'slug' => 'machine-learning'
        ]);

        Category::create([
            'tags' => 'Data Analyst',
            'slug' => 'data-analyst'
        ]);

        // Category::factory(3)->create();
    }
}

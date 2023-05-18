<?php

namespace Database\Seeders;

use App\Models\ContentSlug;
use Illuminate\Database\Seeder;

class ContentSlugsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slugs = [
            'Game of the day',
            'HTML 5 Games',
            'Top Games',
            'Best Sellers',
        ];
        foreach ($slugs as $slug) {
            ContentSlug::create([
                'title' => $slug,
            ]);
        }
    }
}

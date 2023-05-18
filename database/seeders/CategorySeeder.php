<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Action',
            'Recing',
            'Sport',
            'Puzzle',
            'Acade',
            'Adventure',
            'Casual',
            'Strategy',
            'Casino',
            'Fun',
        ];

        $contentSeed = new ContentSeeder();
        foreach ($names as $name) {
            Category::create([
                'name' => $name,
                'icon' => $contentSeed->getImage(),
            ]);
        }
    }
}

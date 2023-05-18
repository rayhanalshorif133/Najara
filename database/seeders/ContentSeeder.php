<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentSlug;
use App\Models\Category;
use App\Models\Content;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $contentSlugs = ContentSlug::all();
            $categories = Category::all();

            

            foreach ($contentSlugs as $contentSlug) {
                foreach ($categories as $category) {
                    Content::create([
                        'category_id' => $category->id,
                        'content_slug_id' => $contentSlug->id,
                        'title' => $this->getTitle(),
                        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                        'image' => $this->getImage(),
                    ]);
                }
            }
    }


    public function getTitle(){

        $title = [
            'Adommo Ekattor',
            'Adommo Shadhinota',
            'Adommo Bijoy',
            'Adommo Boshonto',
            'Adommo Noboborsho',
        ];

        return $title[rand(0,4)];
    }

    public function getImage(){

        $image = [
            'assets/images/game-1.png',
            'assets/images/game-2.png',
            'assets/images/game-3.png',
        ];

        return $image[rand(0,2)];
    }
}

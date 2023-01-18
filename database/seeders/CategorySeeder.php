<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Laravel', 'Php', 'Graphic Design', 'Figma', 'Vue Js', 'React', 'Front-End', 'Back-End', 'Full-Stack'];

        foreach ($categories as $category) {
            $new_category = new Category();
            $new_category->name = $category;
            $new_category->slug = Str::slug($new_category->name);
            $new_category->save();
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\{
    Category,
    Tag,
    User
};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('posts');
        Storage::makeDirectory('posts');

        User::factory(99)->create();

        Category::factory(4)->create();
        Tag::factory(8)->create();

        $this->call(PostSeeder::class);
    }
}

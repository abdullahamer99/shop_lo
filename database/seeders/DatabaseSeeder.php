<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\Review;
use App\Models\Tag;
use App\Models\Ticket;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Product::factory(10)->create();

        Address::factory(1000)->create();
        User::factory(500)->create();
        Product::factory(1500)->create();
        Image:: factory(3500)->create();
        Review::factory(3500)->create();
        Category::factory(50)->create();
        Tag::factory(50)->create();
        Ticket::factory(150)->create();
        Unit::factory(150)->create();
    }
}

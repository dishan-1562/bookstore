<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\book;

class DatabaseSeeder extends Seeder
{
   /**
     * Seed the application's database.
     */
    public function run(): void
    {



        book::truncate();
        book::factory(2000)->create();// \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

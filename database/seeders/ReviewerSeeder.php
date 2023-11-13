<?php

namespace Database\Seeders;

use App\Models\Reviewer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reviewer::factory(1)->create();
    }
}

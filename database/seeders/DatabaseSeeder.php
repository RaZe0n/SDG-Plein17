<?php

namespace Database\Seeders;

use App\Models\AwardedPredicate;
use App\Models\Calendar;
use App\Models\Event;
use App\Models\FAQ;
use App\Models\Posts;
use App\Models\Predicate;
use App\Models\RegisteredEvents;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        AwardedPredicate::factory(10)->create();
        // FAQ::factory(10)->create();
        User::factory(150)->create();
        Predicate::factory(10)->create();
        Calendar::factory(10)->create();
        Posts::factory(10)->create();
        RegisteredEvents::factory(10)->create();
    }
}

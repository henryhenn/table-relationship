<?php

namespace Database\Seeders;

use App\Models\Authors;
use App\Models\Books;
use App\Models\Peminjam;
use App\Models\Publisher;
use App\Models\Shift;
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
        User::factory(100)->create();
        Authors::factory(100)->create();
        Books::factory(100)->create();
        Publisher::factory(100)->create();
        Peminjam::factory(100)->create();

        Shift::create([
            'shift' => '10.00-13.00'
        ]);
        Shift::create([
            'shift' => '13.00-16.00'
        ]);
        Shift::create([
            'shift' => '16.00-19.00'
        ]);
    }
}

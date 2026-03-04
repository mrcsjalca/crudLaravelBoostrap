<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumne;
use App\Models\Centre;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Centre::factory()->times(10)->create();
        Alumne::factory()->times(100)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Counter;
use Illuminate\Database\Seeder;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Counter::create([
            'years'=>20,
            'branches'=>15,
            'team'=>50,
            'issues'=>1500,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Seo;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seo::create([
            'key_ar'=>'مجموعة د.جار الله للفكر القانونى',
            'key_en'=>'Dr.Jaar-allah Lower',
            'site_ar'=>'مجموعة د.جار الله للفكر القانونى',
            'site_en'=>'Dr.Jaar-allah Lower',
            'description_ar'=>'مجموعة د.جار الله للفكر القانونى',
            'description_en'=>'Dr.Jaar-allah Lower',
        ]);
    }
}

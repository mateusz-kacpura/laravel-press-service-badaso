<?php

namespace Database\Seeders\Badaso\PostyTheme\ManualGenerate;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Traits\Seedable;

class BadasoManualGenerateSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = 'database/seeds/Badaso/PostyTheme/ManualGenerate/';

    public function run()
    {
        $this->seed(BadasoCategoriesTableSeeder::class);
        $this->seed(BadasoTagsTableSeeder::class);
        $this->seed(BadasoPostsTableSeeder::class);
        $this->seed(BadasoPostTagTableSeeder::class);
        $this->seed(BadasoContentsTableSeeder::class);
    }
}

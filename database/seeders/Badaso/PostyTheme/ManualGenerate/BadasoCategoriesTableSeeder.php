<?php

namespace Database\Seeders\Badaso\PostyTheme\ManualGenerate;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Module\Post\Models\Category;

class BadasoCategoriesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @throws Exception
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();

        try {
            $categories = [
                0 => [
                    'id'         => 1,
                    'parent_id'  => null,
                    'title'      => 'Politics',
                    'meta_title' => null,
                    'slug'       => 'politics',
                    'content'    => null,
                ],
                1 => [
                    'id'         => 3,
                    'parent_id'  => null,
                    'title'      => 'Finance',
                    'meta_title' => null,
                    'slug'       => 'finance',
                    'content'    => null,
                ],
                2 => [
                    'id'         => 4,
                    'parent_id'  => null,
                    'title'      => 'Health',
                    'meta_title' => null,
                    'slug'       => 'health',
                    'content'    => null,
                ],
                3 => [
                    'id'         => 5,
                    'parent_id'  => null,
                    'title'      => 'Lifestyle',
                    'meta_title' => null,
                    'slug'       => 'lifestyle',
                    'content'    => null,
                ],
                4 => [
                    'id'         => 6,
                    'parent_id'  => null,
                    'title'      => 'Programming',
                    'meta_title' => null,
                    'slug'       => 'programming',
                    'content'    => null,
                ],
                5 => [
                    'id'         => 7,
                    'parent_id'  => null,
                    'title'      => 'Tips & Tricks',
                    'meta_title' => null,
                    'slug'       => 'tips-tricks',
                    'content'    => null,
                ],
            ];

            foreach ($categories as $key => $category) {
                $is_exists = Category::where('slug', $category['slug'])->first();
                if (is_null($is_exists)) {
                    Category::create($category);
                }
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();

            throw new Exception('Exception occur '.$e);
        }
    }
}

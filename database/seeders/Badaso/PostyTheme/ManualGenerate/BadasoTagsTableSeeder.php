<?php

namespace Database\Seeders\Badaso\PostyTheme\ManualGenerate;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Module\Post\Models\Tag;

class BadasoTagsTableSeeder extends Seeder
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
            $tags = ([
                0 => [
                    'id'         => 1,
                    'title'      => 'Programming',
                    'meta_title' => null,
                    'slug'       => 'programming',
                    'content'    => null,
                ],
                1 => [
                    'id'         => 2,
                    'title'      => 'Machine Learning',
                    'meta_title' => null,
                    'slug'       => 'machine-learning',
                    'content'    => null,
                ],
                2 => [
                    'id'         => 3,
                    'title'      => 'System Design',
                    'meta_title' => null,
                    'slug'       => 'system-design',
                    'content'    => null,
                ],
                3 => [
                    'id'         => 4,
                    'title'      => 'Interview',
                    'meta_title' => null,
                    'slug'       => 'interview',
                    'content'    => null,
                ],
                4 => [
                    'id'         => 5,
                    'title'      => 'Software Development',
                    'meta_title' => null,
                    'slug'       => 'software-development',
                    'content'    => null,
                ],
                5 => [
                    'id'         => 6,
                    'title'      => 'Hacker',
                    'meta_title' => null,
                    'slug'       => 'hacker',
                    'content'    => null,
                ],
                6 => [
                    'id'         => 7,
                    'title'      => 'Travel',
                    'meta_title' => null,
                    'slug'       => 'travel',
                    'content'    => null,
                ],
            ]);

            foreach ($tags as $key => $tag) {
                Tag::create($tag);
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();

            throw new Exception('Exception occur '.$e);
        }
    }
}

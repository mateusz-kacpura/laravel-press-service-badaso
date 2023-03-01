<?php

namespace Database\Seeders\Badaso\PostyTheme\ManualGenerate;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Module\Post\Models\PostTag;

class BadasoPostTagTableSeeder extends Seeder
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
            $post_tags = ([
                0 => [
                    'post_id' => 1,
                    'tag_id'  => 1,
                ],
                1 => [
                    'post_id' => 1,
                    'tag_id'  => 2,
                ],
                2 => [
                    'post_id' => 1,
                    'tag_id'  => 4,
                ],
                3 => [
                    'post_id' => 1,
                    'tag_id'  => 3,
                ],
                4 => [
                    'post_id' => 1,
                    'tag_id'  => 5,
                ],
                5 => [
                    'post_id' => 2,
                    'tag_id'  => 1,
                ],
                6 => [
                    'post_id' => 2,
                    'tag_id'  => 5,
                ],
                7 => [
                    'post_id' => 3,
                    'tag_id'  => 1,
                ],
                8 => [
                    'post_id' => 3,
                    'tag_id'  => 2,
                ],
                9 => [
                    'post_id' => 3,
                    'tag_id'  => 5,
                ],
                10 => [
                    'post_id' => 4,
                    'tag_id'  => 4,
                ],
                11 => [
                    'post_id' => 5,
                    'tag_id'  => 7,
                ],
                12 => [
                    'post_id' => 7,
                    'tag_id'  => 4,
                ],
                13 => [
                    'post_id' => 9,
                    'tag_id'  => 5,
                ],
                14 => [
                    'post_id' => 9,
                    'tag_id'  => 1,
                ],
                15 => [
                    'post_id' => 9,
                    'tag_id'  => 2,
                ],
            ]);

            foreach ($post_tags as $key => $post_tag) {
                PostTag::insert($post_tag);
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();

            throw new Exception('Exception occur '.$e);
        }
    }
}

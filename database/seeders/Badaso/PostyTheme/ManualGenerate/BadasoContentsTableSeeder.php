<?php

namespace Database\Seeders\Badaso\PostyTheme\ManualGenerate;

use Illuminate\Database\Seeder;

class BadasoContentsTableSeeder extends Seeder
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
        \DB::beginTransaction();

        try {
            \DB::table('badaso_contents')->delete();

            \DB::table('badaso_contents')->insert([
                0 => [
                    'id'         => 10,
                    'slug'       => 'posty-theme-social-media',
                    'label'      => 'Posty Theme Social Media',
                    'value'      => '{"facebook":{"name":"facebook","label":"Facebook","type":"group","data":{"image":{"name":"image","label":"Image","type":"image","data":"files/shares/facebook.svg"},"url":{"name":"url","label":"URL","type":"url","data":{"url":"#","text":"Facebook Logo"}}}},"twitter":{"name":"twitter","label":"Twitter","type":"group","data":{"image":{"name":"image","label":"Image","type":"image","data":"files/shares/twitter.svg"},"url":{"name":"url","label":"URL","type":"url","data":{"url":"#","text":"Twitter Logo"}}}},"instagram":{"name":"instagram","label":"Instagram","type":"group","data":{"image":{"name":"image","label":"Image","type":"image","data":"files/shares/instagram.svg"},"url":{"name":"url","label":"URL","type":"url","data":{"url":"#","text":"Instagram Logo"}}}},"telegram":{"name":"telegram","label":"Telegram","type":"group","data":{"image":{"name":"image","label":"Image","type":"image","data":"files/shares/telegram.svg"},"url":{"name":"url","label":"URL","type":"url","data":{"url":"#","text":"Telegram Logo"}}}},"youtube":{"name":"youtube","label":"Youtube","type":"group","data":{"image":{"name":"image","label":"Image","type":"image","data":"files/shares/youtube.svg"},"url":{"name":"url","label":"URL","type":"url","data":{"url":"#","text":"Youtube Logo"}}}}}',
                    'created_at' => '2021-11-26 08:00:52',
                    'updated_at' => '2021-11-26 08:00:52',
                ],
            ]);

            \DB::commit();
        } catch (Exception $e) {
            \DB::rollBack();

            throw new Exception('Exception occur '.$e);
        }
    }
}

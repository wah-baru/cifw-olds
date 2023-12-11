<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory as Faker;

class NewsSeeder extends Seeder
{
    public function run()
    {
        function createUrlSlug($urlString)
        {
            $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $urlString);
            return $slug;
        }

        $q_table    = $this->db->table('news');
        $q_num      = 3;
        $faker = Faker::create('id_ID');
        for ($start = 1; $start<= $q_num; $start++)
        {
            $title = $faker->text(12);
            $news_data = [        
                // generate data by calling methods
                'title'      => $title,
                'content'    => $faker->text(400),
                'slug'       => createUrlSlug($title),
            ];
            $q_table->insert($news_data);
            $q_id = $this->db->insertID();
            log_message('debug', 'id :'.$q_id);
        }
    }
}

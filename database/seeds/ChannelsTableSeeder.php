<?php

use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['slug' => 'laravel', 'title' => 'Laravel', 'created_at' => now(), 'updated_at' => now()],
            ['slug' => 'vuejs', 'title' => 'Vue.js', 'created_at' => now(), 'updated_at' => now()],
        ];

        \App\Channel::insert($data);
    }
}

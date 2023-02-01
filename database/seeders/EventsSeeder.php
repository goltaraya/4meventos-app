<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis vestibulum velit. Suspendisse at posuere ex. Nullam non lacus nec purus posuere sagittis a quis justo. Ut non elementum dui. Proin ut tempus mauris. Donec urna mi, volutpat quis porttitor quis, faucibus nec odio. Integer aliquet porta velit, ut suscipit sapien sodales ut. Fusce auctor quis urna id gravida. Aenean tempor tortor sem, aliquet pellentesque justo laoreet a. Morbi pretium rhoncus tempor. Sed enim risus, mollis a luctus quis, lobortis a magna. Cras aliquet porta neque, nec mattis urna volutpat eu. Etiam placerat sit amet felis at fermentum. Morbi ullamcorper, est sed tempus suscipit, elit ex pellentesque dolor, id molestie odio ex faucibus nisi. Cras interdum urna vitae diam faucibus malesuada.<br>
        Praesent sed tortor sodales, tempor ipsum eleifend, rutrum augue. Maecenas vel lectus nisl. Nunc nec odio non sem ultricies ornare. Nullam condimentum, ex vitae varius sagittis, elit nunc vestibulum libero, pellentesque ornare nisi lorem a massa. Aliquam quis magna ut lectus tristique tristique at non leo. Cras lacinia id dolor vel tristique. Donec id nunc et massa semper rhoncus. Sed rhoncus mi vitae orci viverra, a efficitur felis hendrerit. Sed id metus nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam ut lacus ut lectus aliquam pretium. Nullam eleifend sem ac nisi hendrerit dignissim.';

        DB::table('events')->insert([
            'title' => 'The Tech Weekend - 2023',
            'description' => $description,
            'private' => 0,
            'participants' => 200,
            'city' => 'São Luís - MA',
            'date' => '2023-10-20',
            'user_id' => 1
        ]);

        DB::table('events')->insert([
            'title' => 'Electronic Entertainment Expo 2023',
            'description' => $description,
            'private' => 0,
            'participants' => 1000,
            'city' => 'Los Angeles - CA',
            'date' => '2023-06-16',
            'user_id' => 1
        ]);

        DB::table('events')->insert([
            'title' => 'Campus Party Brasil',
            'description' => $description,
            'private' => 0,
            'participants' => 500,
            'city' => 'São Paulo - SP',
            'date' => '2023-07-25',
            'user_id' => 1
        ]);

        DB::table('events')->insert([
            'title' => 'Evento de PHP',
            'description' => $description,
            'private' => 1,
            'participants' => 50,
            'city' => 'Recife - PE',
            'date' => '2023-03-09',
            'user_id' => 2
        ]);

        DB::table('events')->insert([
            'title' => 'João Pessoa Tech',
            'description' => $description,
            'private' => 0,
            'participants' => 350,
            'city' => 'João Pessoa - PB',
            'date' => '2023-09-14',
            'user_id' => 2
        ]);
    }
}

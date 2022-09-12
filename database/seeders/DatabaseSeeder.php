<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Models\User::factory(5)->create();
        Listing::factory(6)->create();

    //     Listing::create([


    //       'title' => 'laravel senior developer',
    //        'tags' =>  'laravel, javascript',
    //        'company' => 'Blocktech kenya',
    //        'location' => 'Nairobi,Boston',
    //        'email' => 'blocktech@gmail.com', 
    //         'website' => 'http://www.blocktech.com',
    //        'description' => 'we make scalable products',
           




    //     ]);
    

    //  Listing::create([
    //     'title' => 'Fullstack engineer',
    //     'tags' => 'laravel,backend, api,',
    //     'company' => 'stack industries',
    //     'location' => 'Newyork,NY',
    //     'email'=> 'fullstack@gmail.com',
    //     'website' => 'http://www.stackindustries.com',
    //     'description' => 'Modern bootcamp company',
    //  ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Url;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $urls = [
            ['url'  => '/test/page1', 'viewPath' => 'testing.page1'],
            ['url'  =>  '/test/page2', 'viewPath' => 'testing.page2'],
            ['url'  =>  '/test/page3', 'viewPath' => 'testing.page3'],
        ];

        foreach($urls as $url){
            Url::create($url);
        }
    }
}

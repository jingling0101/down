<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('ArticleTableSeeder');
    }
}

class ArticleTableSeeder extends Seeder
{
    public function run()
    {
        App\Article::truncate();
        factory(App\Article::class, 20)->create();
    }
}
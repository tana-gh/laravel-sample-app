<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++)
        {
            $article        = new Article();
            $article->title = "title{$i}";
            $article->body  = "body{$i}";
            $article->save();
        }
    }
}

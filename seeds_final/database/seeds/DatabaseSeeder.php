<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //$this->call(ArticleTableSeeder::class);
        $this->call('ArticleTableSeeder');
        
        Model::reguard();
    }
}

class ArticleTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('articles')->delete();

        Article::create( [ 
            'name' => 'Entrada 1',
            'text' => 'Texto ...',
            'views' => rand(0,1000),
            'creation_date' => date('Y-m-d h:i:s')
         ] );

        Article::create( [ 
            'name' => 'Entrada 2',
            'text' => 'Texto ...',
            'views' => rand(0,1000),
            'creation_date' => date('Y-m-d h:i:s')
         ] );

        Article::create( [ 
            'name' => 'Entrada 3',
            'text' => 'Texto ...',
            'views' => rand(0,1000),
            'creation_date' => date('Y-m-d h:i:s')
         ] );

        Article::create( [ 
            'name' => 'Entrada 4',
            'text' => 'Texto ...',
            'views' => rand(0,1000),
            'creation_date' => date('Y-m-d h:i:s')
         ] );

        Article::create( [ 
            'name' => 'Entrada 5',
            'text' => 'Texto ...',
            'views' => rand(0,1000),
            'creation_date' => date('Y-m-d h:i:s')
         ] );

        Article::create( [ 
            'name' => 'Entrada 6',
            'text' => 'Texto ...',
            'views' => rand(0,1000),
            'creation_date' => date('Y-m-d h:i:s')
         ] );

        Article::create( [ 
            'name' => 'Entrada 7',
            'text' => 'Texto ...',
            'views' => rand(0,1000),
            'creation_date' => date('Y-m-d h:i:s')
         ] );
    }
}

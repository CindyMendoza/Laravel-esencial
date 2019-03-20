<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Article;
use App\Author;
use App\Phone;

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

        $this->call('AppSeeder');
        
        Model::reguard();
    }
}

class AppSeeder extends Seeder
{
    public function run()
    {

        DB::table('articles')->delete();
        DB::table('authors')->delete();
        DB::table('phones')->delete();

        $bernardo = Author::create( [ 
            'name' => 'Bernardo'
            
         ] );

        $sergio = Author::create( [ 
            'name' => 'Sergio'
        
         ] );

        $francisco = Author::create( [ 
            'name' => 'Francisco'
            
         ] );

        Article::create( [ 
            'name' => 'Entrada 1',
            'text' => 'Texto ...',
            'author_id' => $bernardo->id
         ] );

        Article::create( [ 
            'name' => 'Entrada 2',
            'text' => 'Texto ...',
            'author_id' => $sergio->id
         ] );

        Article::create( [ 
            'name' => 'Entrada 3',
            'text' => 'Texto ...',
            'author_id' => $francisco->id
         ] );

        $first_phone = Phone::create([
            'number' => '444 4444',
            'author_id' => $bernardo->id
            ]);

        $second_phone = Phone::create([
            'number' => '555 5555',
            'author_id' => $bernardo->id
            ]);


    }

}



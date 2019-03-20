<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Client;

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

        $this->call(AppSeeder::class);

        Model::reguard();
    }
}

class AppSeeder extends Seeder
{
    public function run()
    {
        DB::table('clients')->delete();

        Client::create( [ 
            'name' => 'Sergio',
            'email' => 'sergio@correo.com',
         ] );

        Client::create( [ 
            'name' => 'Francisco',
            'email' => 'francisco@correo.com',
         ] );

        Client::create( [ 
            'name' => 'Marco',
            'email' => 'marco@correo.com',
         ] );

    }
}

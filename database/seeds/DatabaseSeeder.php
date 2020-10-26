<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        App\Mascotas::truncate(); //vacía la tabla de preguntas
        DB::unprepared(file_get_contents('database/mascotas.sql'));
        // $this->call(UsersTableSeeder::class);

    }
}

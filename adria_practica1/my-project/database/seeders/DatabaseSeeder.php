<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Centre;
use App\Models\Alumnat;
use App\Models\Professorat;
// per executar el seeder fem php artisan db:seed
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*
        | Crea 5 registres per cada taula utilitzant les seves factories
            NOTA: No sobreescriu, es sumatori.
        */
        Centre::factory(5)->create();
        Alumnat::factory(5)->create();
        Professorat::factory(5)->create();

    }
}

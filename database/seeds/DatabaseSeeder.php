<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call(FamiliaSeeder::class);
        $this->call(AlunoSeeder::class);
        $this->call(SerieSeeder::class);
         $this->call(TurmaSeeder::class);
         $this->call(ContratanteSeeder::class);
        //$this->call(UsersTableSeeder::class);
    }

}

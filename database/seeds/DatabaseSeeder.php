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

        $this->call(EstadoTableSeeder::class);
        $this->call(CidadeTableSeeder::class);
        $this->call(StatustorneiosTableSeeder::class);
        $this->call(StatustenistasTableSeeder::class);
        $this->call(ClasseTableSeeder::class);
        $this->call(UsersTableSeeder::class);
          
    }
}

<?php

use Illuminate\Database\Seeder;

class TodosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\Todos::class,5)->create();
    }
}

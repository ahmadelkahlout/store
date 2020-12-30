<?php

use Illuminate\Database\Seeder;

class contactseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\contact::class,100)->create();

    }
}

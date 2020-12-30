<?php

use Illuminate\Database\Seeder;

class proudectlineseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\productline::class,50)->create();

    }
}

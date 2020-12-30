<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class officeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\office::class,100)->create();
    }
}

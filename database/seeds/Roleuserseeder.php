<?php

use Illuminate\Database\Seeder;

class Roleuserseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<100 ; $i++){
            \Illuminate\Support\Facades\DB::table('role_user')->insert([
                'user_id' => \APP\User::all()->random()->id,
                'role_id' => \APP\role::all()->random()->id,

            ]);
        }
    }
}

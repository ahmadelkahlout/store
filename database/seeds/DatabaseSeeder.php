<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(userseeder::class);
        $this->call(officeseeder::class);
        $this->call(employeeseeder::class);
        $this->call(customerseeder::class);
        $this->call(orderseeder::class);
        $this->call(proudectlineseeder::class);
        $this->call(proudectseeder::class);
        $this->call(ordproductseeder::class);
        $this->call(paymentseeder::class);
        $this->call(contactseeder::class);
        $this->call(RoleSeeder::class);
        $this->call(Roleuserseeder::class);
        $this->call(ImageSeeder::class);













    }
}

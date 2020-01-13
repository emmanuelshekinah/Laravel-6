<?php

use Illuminate\Database\Seeder;

class shops extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Shops', 10)->create();
    }
}

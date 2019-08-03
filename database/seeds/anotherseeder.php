<?php

use Illuminate\Database\Seeder;

class anotherseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\another::class, 5)->create();
    }
}

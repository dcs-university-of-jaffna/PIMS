<?php

use Illuminate\Database\Seeder;

class FaunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Fauna::class, 30)->create();
    }
}

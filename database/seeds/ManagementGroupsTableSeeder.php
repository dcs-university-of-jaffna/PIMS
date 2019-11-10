<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManagementGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('management_groups')->insert(
            [
                ['id' => 1, 'name' => 'floras'],
                ['id' => 2, 'name' => 'faunas'],
                ['id' => 3, 'name' => 'chemical-pesticides'],
                ['id' => 4, 'name' => 'chemical-others'],
                ['id' => 5, 'name' => 'pharmaceuticals'],
            ]
        );
    }
}

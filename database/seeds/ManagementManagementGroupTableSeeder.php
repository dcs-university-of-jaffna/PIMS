<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManagementManagementGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('management_management_group')->insert(
            [
                ['management_group_id' => 1, 'management_id' => 26, 'category' => 'general'],
                ['management_group_id' => 1, 'management_id' => 29, 'category' => 'general'],
                ['management_group_id' => 1, 'management_id' => 6, 'category' => 'general'],
                ['management_group_id' => 1, 'management_id' => 9, 'category' => 'general'],
                ['management_group_id' => 1, 'management_id' => 13, 'category' => 'general'],
                ['management_group_id' => 1, 'management_id' => 3, 'category' => 'general'],
                ['management_group_id' => 1, 'management_id' => 10, 'category' => 'general'],
                ['management_group_id' => 1, 'management_id' => 22, 'category' => 'general'],
                ['management_group_id' => 1, 'management_id' => 14, 'category' => 'general'],
                ['management_group_id' => 1, 'management_id' => 4, 'category' => 'general'],
                ['management_group_id' => 1, 'management_id' => 11, 'category' => 'general'],
                ['management_group_id' => 1, 'management_id' => 5, 'category' => 'general'],
                ['management_group_id' => 1, 'management_id' => 24, 'category' => 'general'],
                ['management_group_id' => 1, 'management_id' => 21, 'category' => 'general'],
                ['management_group_id' => 1, 'management_id' => 20, 'category' => 'general'],
                ['management_group_id' => 1, 'management_id' => 15, 'category' => 'gastrointestinal decontamination'],
                ['management_group_id' => 1, 'management_id' => 1, 'category' => 'gastrointestinal decontamination'],
                ['management_group_id' => 1, 'management_id' => 7, 'category' => 'general'],
                ['management_group_id' => 2, 'management_id' => 26, 'category' => 'general'],
                ['management_group_id' => 2, 'management_id' => 17, 'category' => 'general'],
                ['management_group_id' => 2, 'management_id' => 30, 'category' => 'general'],
                ['management_group_id' => 2, 'management_id' => 31, 'category' => 'general'],
                ['management_group_id' => 2, 'management_id' => 8, 'category' => 'general'],
                ['management_group_id' => 2, 'management_id' => 2, 'category' => 'general'],
                ['management_group_id' => 2, 'management_id' => 33, 'category' => 'general'],
                ['management_group_id' => 2, 'management_id' => 34, 'category' => 'general'],
                ['management_group_id' => 2, 'management_id' => 35, 'category' => 'general'],
                ['management_group_id' => 2, 'management_id' => 36, 'category' => 'general'],
                ['management_group_id' => 2, 'management_id' => 37, 'category' => 'general'],
                ['management_group_id' => 2, 'management_id' => 11, 'category' => 'general'],
                ['management_group_id' => 2, 'management_id' => 6, 'category' => 'general'],
                ['management_group_id' => 2, 'management_id' => 4, 'category' => 'general'],
                ['management_group_id' => 2, 'management_id' => 38, 'category' => 'general'],
                ['management_group_id' => 2, 'management_id' => 39, 'category' => 'general'],
                ['management_group_id' => 2, 'management_id' => 16, 'category' => 'general'],
                ['management_group_id' => 2, 'management_id' => 40, 'category' => 'general'],
                ['management_group_id' => 2, 'management_id' => 41, 'category' => 'general'],
            ]
        );
    }
}

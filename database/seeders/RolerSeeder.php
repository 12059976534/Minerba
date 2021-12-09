<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                'id' => 1,
                'name' => 'personal',
                'guard_name' => 'web',
            ],
            [
                'id' => 2,
                'name' => 'company',
                'guard_name' => 'web',
            ],
            [
                'id' => 3,
                'name' => 'contractor',
                'guard_name' => 'web',
            ],
            [
                'id' => 4,
                'name' => 'consultant',
                'guard_name' => 'web',
            ],
        );
    }
}

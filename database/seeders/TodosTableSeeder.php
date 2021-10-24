<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => '寝る',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime()
        ];
        DB::table('todos')->insert($param);
    }
}

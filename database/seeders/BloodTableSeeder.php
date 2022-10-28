<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BloodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => 1,
            'name' => 'A型',
        ];
        DB::table('bloods')->insert($param);

        $param = [
            'id' => 2,
            'name' => 'B型',
        ];
        DB::table('bloods')->insert($param);

        $param = [
            'id' => 3,
            'name' => 'O型',
        ];
        DB::table('bloods')->insert($param);

        $param = [
            'id' => 4,
            'name' => 'AB型',
        ];
        DB::table('bloods')->insert($param);

        $param = [
            'id' => 5,
            'name' => '不明',
        ];
        DB::table('bloods')->insert($param);
    }
}

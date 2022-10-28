<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BirthmonthTableSeeder extends Seeder
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
            'name' => '1月',
        ];
        DB::table('birthmonths')->insert($param);

        $param = [
            'id' => 2,
            'name' => '2月',
        ];
        DB::table('birthmonths')->insert($param);

        $param = [
            'id' => 3,
            'name' => '3月',
        ];
        DB::table('birthmonths')->insert($param);

        $param = [
            'id' => 4,
            'name' => '4月',
        ];
        DB::table('birthmonths')->insert($param);

        $param = [
            'id' => 5,
            'name' => '5月',
        ];
        DB::table('birthmonths')->insert($param);

        $param = [
            'id' => 6,
            'name' => '6月',
        ];
        DB::table('birthmonths')->insert($param);

        $param = [
            'id' => 7,
            'name' => '7月',
        ];
        DB::table('birthmonths')->insert($param);

        $param = [
            'id' => 8,
            'name' => '8月',
        ];
        DB::table('birthmonths')->insert($param);

        $param = [
            'id' => 9,
            'name' => '9月',
        ];
        DB::table('birthmonths')->insert($param);

        $param = [
            'id' => 10,
            'name' => '10月',
        ];
        DB::table('birthmonths')->insert($param);

        $param = [
            'id' => 11,
            'name' => '11月',
        ];
        DB::table('birthmonths')->insert($param);

        $param = [
            'id' => 12,
            'name' => '12月',
        ];
        DB::table('birthmonths')->insert($param);
    }
}

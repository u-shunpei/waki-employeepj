<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionTableSeeder extends Seeder
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
            'name' => '生産一課',
        ];
        DB::table('divisions')->insert($param);

        $param = [
            'id' => 2,
            'name' => '生産二課',
        ];
        DB::table('divisions')->insert($param);

        $param = [
            'id' => 3,
            'name' => '生産三課',
        ];
        DB::table('divisions')->insert($param);

        $param = [
            'id' => 4,
            'name' => '直販課',
        ];
        DB::table('divisions')->insert($param);

        $param = [
            'id' => 5,
            'name' => 'BPO事業企画課',
        ];
        DB::table('divisions')->insert($param);

        $param = [
            'id' => 6,
            'name' => 'システム企画課',
        ];
        DB::table('divisions')->insert($param);

        $param = [
            'id' => 7,
            'name' => '事業開発室',
        ];
        DB::table('divisions')->insert($param);

        $param = [
            'id' => 8,
            'name' => 'デザイン室',
        ];
        DB::table('divisions')->insert($param);

        $param = [
            'id' => 9,
            'name' => 'IT課',
        ];
        DB::table('divisions')->insert($param);

        $param = [
            'id' => 10,
            'name' => '経営企画課',
        ];
        DB::table('divisions')->insert($param);

        $param = [
            'id' => 11,
            'name' => '未所属',
        ];
        DB::table('divisions')->insert($param);
    }
}

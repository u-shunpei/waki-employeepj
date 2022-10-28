<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentTableSeeder extends Seeder
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
            'name' => '生産調達本部',
        ];
        DB::table('departments')->insert($param);

        $param = [
            'id' => 2,
            'name' => 'マーケティング本部',
        ];
        DB::table('departments')->insert($param);

        $param = [
            'id' => 3,
            'name' => '新規事業開発部',
        ];
        DB::table('departments')->insert($param);

        $param = [
            'id' => 4,
            'name' => '企画本部',
        ];
        DB::table('departments')->insert($param);

        $param = [
            'id' => 5,
            'name' => '未所属',
        ];
        DB::table('departments')->insert($param);
    }
}

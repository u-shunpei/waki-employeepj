<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTableSeeder extends Seeder
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
            'name' => '浦山竣平',
            'nickname' => 'ウラ',
            'birthday' => '６月１日',
            'self_introduction' => '自転車好きの２５歳です！',
            'hire_date' => '２０２１年１２月１日',
            'tel' => '070-7362-6557',
            'hobby' => 'サイクリング',
            'image_url' => 'https://www.knt.co.jp/travelguide/kokunai/image/travelguide_043_mv.jpg',
            'image_url2' => 'https://dol.ismcdn.jp/mwimgs/a/d/1080m/img_ad2985f61ba396ceae373edf5e1b9c88195360.jpg',
            'image_url3' => 'https://img-cdn.guide.travel.co.jp/article/455/20151216174612/915E3B9B4B054594BAD4CEA2B003291B_LL.jpg',
            'work' => 'プログラミング',
            'skill' => 'html,css,javascript,php,laravel',
            'target' => '自転車日本一周',
            'food' => '寿司',
            'animal' => 'キリン',
            'blood_id' => '1',
            'birthmonth_id' => '6',
            'position_id' => '10',
            'department_id' => '4',
            'division_id' => '9',
        ];
        DB::table('employees')->insert($param);

        $param = [
            'id' => 2,
            'name' => '小野寺達哉',
            'nickname' => 'デラ',
            'birthday' => '１０月８日',
            'self_introduction' => 'サッカー',
            'hire_date' => '２０２２年１月４日',
            'tel' => '',
            'hobby' => 'いろいろ',
            'image_url' => 'https://www.knt.co.jp/travelguide/kokunai/image/travelguide_043_mv.jpg',
            'image_url2' => 'https://dol.ismcdn.jp/mwimgs/a/d/1080m/img_ad2985f61ba396ceae373edf5e1b9c88195360.jpg',
            'image_url3' => 'https://img-cdn.guide.travel.co.jp/article/455/20151216174612/915E3B9B4B054594BAD4CEA2B003291B_LL.jpg',
            'work' => 'いろいろ',
            'skill' => 'いろいろ',
            'target' => 'いろいろ',
            'food' => 'いろいろ',
            'animal' => 'いろいろ',
            'blood_id' => '2',
            'birthmonth_id' => '10',
            'position_id' => '10',
            'department_id' => '4',
            'division_id' => '10',
        ];
        DB::table('employees')->insert($param);

        $param = [
            'id' => 3,
            'name' => '熊西晃',
            'nickname' => 'クマ',
            'birthday' => '４月',
            'self_introduction' => '頑張ります',
            'hire_date' => '２０２２年４月１日',
            'tel' => '',
            'hobby' => '飲み',
            'image_url' => 'https://www.knt.co.jp/travelguide/kokunai/image/travelguide_043_mv.jpg',
            'image_url2' => 'https://dol.ismcdn.jp/mwimgs/a/d/1080m/img_ad2985f61ba396ceae373edf5e1b9c88195360.jpg',
            'image_url3' => 'https://img-cdn.guide.travel.co.jp/article/455/20151216174612/915E3B9B4B054594BAD4CEA2B003291B_LL.jpg',
            'work' => 'IT',
            'skill' => 'IT',
            'target' => 'IT',
            'food' => 'ビール',
            'animal' => 'あ',
            'blood_id' => '3',
            'birthmonth_id' => '4',
            'position_id' => '7',
            'department_id' => '4',
            'division_id' => '9',
        ];
        DB::table('employees')->insert($param);

        $param = [
            'id' => 4,
            'name' => '浦山昇平',
            'nickname' => 'ショーヘイ',
            'birthday' => '5月12日',
            'self_introduction' => '兄貴',
            'hire_date' => '不明',
            'tel' => '',
            'hobby' => 'ラグビー',
            'image_url' => 'https://www.knt.co.jp/travelguide/kokunai/image/travelguide_043_mv.jpg',
            'image_url2' => 'https://dol.ismcdn.jp/mwimgs/a/d/1080m/img_ad2985f61ba396ceae373edf5e1b9c88195360.jpg',
            'image_url3' => 'https://img-cdn.guide.travel.co.jp/article/455/20151216174612/915E3B9B4B054594BAD4CEA2B003291B_LL.jpg',
            'work' => '不明',
            'skill' => '不明',
            'target' => '不明',
            'food' => '不明',
            'animal' => '不明',
            'blood_id' => '1',
            'birthmonth_id' => '5',
            'position_id' => '10',
            'department_id' => '5',
            'division_id' => '11',
        ];
        DB::table('employees')->insert($param);

        $param = [
            'id' => 5,
            'name' => '浦山哲子',
            'nickname' => 'さっちゃん',
            'birthday' => '4月5日',
            'self_introduction' => '不明',
            'hire_date' => '不明',
            'tel' => '',
            'hobby' => '不明',
            'image_url' => 'https://www.knt.co.jp/travelguide/kokunai/image/travelguide_043_mv.jpg',
            'image_url2' => 'https://dol.ismcdn.jp/mwimgs/a/d/1080m/img_ad2985f61ba396ceae373edf5e1b9c88195360.jpg',
            'image_url3' => 'https://img-cdn.guide.travel.co.jp/article/455/20151216174612/915E3B9B4B054594BAD4CEA2B003291B_LL.jpg',
            'work' => '不明',
            'skill' => '不明',
            'target' => '笛美',
            'food' => '笛美',
            'animal' => '不明',
            'blood_id' => '1',
            'birthmonth_id' => '4',
            'position_id' => '10',
            'department_id' => '5',
            'division_id' => '11',
        ];
        DB::table('employees')->insert($param);
    }
}

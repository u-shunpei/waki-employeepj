<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            BirthmonthTableSeeder::class,
            BloodTableSeeder::class,
            DepartmentTableSeeder::class,
            DivisionTableSeeder::class,
            EmployeeTableSeeder::class,
            PositionTableSeeder::class,
        ]);
    }
}

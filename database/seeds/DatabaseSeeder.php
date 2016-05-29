<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('DepartmentsTableSeeder');
        $this->call('DeptEmpTableSeeder');
        $this->call('DeptManagerTableSeeder');
        $this->call('EmployeesTableSeeder');
        $this->call('SalariesTableSeeder');
        $this->call('TitlesTableSeeder');
    }
}

<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('departments')->delete();
        
        \DB::table('departments')->insert(array (
            0 => 
            array (
                'dept_no' => 'd001',
                'dept_name' => 'Marketing',
            ),
            1 => 
            array (
                'dept_no' => 'd002',
                'dept_name' => 'Finance',
            ),
            2 => 
            array (
                'dept_no' => 'd003',
                'dept_name' => 'Human Resources',
            ),
            3 => 
            array (
                'dept_no' => 'd004',
                'dept_name' => 'Production',
            ),
            4 => 
            array (
                'dept_no' => 'd005',
                'dept_name' => 'Development',
            ),
            5 => 
            array (
                'dept_no' => 'd006',
                'dept_name' => 'Quality Management',
            ),
            6 => 
            array (
                'dept_no' => 'd007',
                'dept_name' => 'Sales',
            ),
            7 => 
            array (
                'dept_no' => 'd008',
                'dept_name' => 'Research',
            ),
            8 => 
            array (
                'dept_no' => 'd009',
                'dept_name' => 'Customer Service',
            ),
        ));
        
        
    }
}

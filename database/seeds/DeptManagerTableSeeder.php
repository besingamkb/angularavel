<?php

use Illuminate\Database\Seeder;

class DeptManagerTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dept_manager')->delete();
        
        \DB::table('dept_manager')->insert(array (
            0 => 
            array (
                'dept_no' => 'd001',
                'emp_no' => 110022,
                'from_date' => '1985-01-01',
                'to_date' => '1991-10-01',
            ),
            1 => 
            array (
                'dept_no' => 'd001',
                'emp_no' => 110039,
                'from_date' => '1991-10-01',
                'to_date' => '9999-01-01',
            ),
            2 => 
            array (
                'dept_no' => 'd002',
                'emp_no' => 110085,
                'from_date' => '1985-01-01',
                'to_date' => '1989-12-17',
            ),
            3 => 
            array (
                'dept_no' => 'd002',
                'emp_no' => 110114,
                'from_date' => '1989-12-17',
                'to_date' => '9999-01-01',
            ),
            4 => 
            array (
                'dept_no' => 'd003',
                'emp_no' => 110183,
                'from_date' => '1985-01-01',
                'to_date' => '1992-03-21',
            ),
            5 => 
            array (
                'dept_no' => 'd003',
                'emp_no' => 110228,
                'from_date' => '1992-03-21',
                'to_date' => '9999-01-01',
            ),
            6 => 
            array (
                'dept_no' => 'd004',
                'emp_no' => 110303,
                'from_date' => '1985-01-01',
                'to_date' => '1988-09-09',
            ),
            7 => 
            array (
                'dept_no' => 'd004',
                'emp_no' => 110344,
                'from_date' => '1988-09-09',
                'to_date' => '1992-08-02',
            ),
            8 => 
            array (
                'dept_no' => 'd004',
                'emp_no' => 110386,
                'from_date' => '1992-08-02',
                'to_date' => '1996-08-30',
            ),
            9 => 
            array (
                'dept_no' => 'd004',
                'emp_no' => 110420,
                'from_date' => '1996-08-30',
                'to_date' => '9999-01-01',
            ),
            10 => 
            array (
                'dept_no' => 'd005',
                'emp_no' => 110511,
                'from_date' => '1985-01-01',
                'to_date' => '1992-04-25',
            ),
            11 => 
            array (
                'dept_no' => 'd005',
                'emp_no' => 110567,
                'from_date' => '1992-04-25',
                'to_date' => '9999-01-01',
            ),
            12 => 
            array (
                'dept_no' => 'd006',
                'emp_no' => 110725,
                'from_date' => '1985-01-01',
                'to_date' => '1989-05-06',
            ),
            13 => 
            array (
                'dept_no' => 'd006',
                'emp_no' => 110765,
                'from_date' => '1989-05-06',
                'to_date' => '1991-09-12',
            ),
            14 => 
            array (
                'dept_no' => 'd006',
                'emp_no' => 110800,
                'from_date' => '1991-09-12',
                'to_date' => '1994-06-28',
            ),
            15 => 
            array (
                'dept_no' => 'd006',
                'emp_no' => 110854,
                'from_date' => '1994-06-28',
                'to_date' => '9999-01-01',
            ),
            16 => 
            array (
                'dept_no' => 'd007',
                'emp_no' => 111035,
                'from_date' => '1985-01-01',
                'to_date' => '1991-03-07',
            ),
            17 => 
            array (
                'dept_no' => 'd007',
                'emp_no' => 111133,
                'from_date' => '1991-03-07',
                'to_date' => '9999-01-01',
            ),
            18 => 
            array (
                'dept_no' => 'd008',
                'emp_no' => 111400,
                'from_date' => '1985-01-01',
                'to_date' => '1991-04-08',
            ),
            19 => 
            array (
                'dept_no' => 'd008',
                'emp_no' => 111534,
                'from_date' => '1991-04-08',
                'to_date' => '9999-01-01',
            ),
            20 => 
            array (
                'dept_no' => 'd009',
                'emp_no' => 111692,
                'from_date' => '1985-01-01',
                'to_date' => '1988-10-17',
            ),
            21 => 
            array (
                'dept_no' => 'd009',
                'emp_no' => 111784,
                'from_date' => '1988-10-17',
                'to_date' => '1992-09-08',
            ),
            22 => 
            array (
                'dept_no' => 'd009',
                'emp_no' => 111877,
                'from_date' => '1992-09-08',
                'to_date' => '1996-01-03',
            ),
            23 => 
            array (
                'dept_no' => 'd009',
                'emp_no' => 111939,
                'from_date' => '1996-01-03',
                'to_date' => '9999-01-01',
            ),
        ));
        
        
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeesDepartments extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dept_emp';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'from_date',
        'to_date'
    ];
}

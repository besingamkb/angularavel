<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salaries extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'salaries';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'salary',
        'from_date',
        'to_date'
    ];
    
    /**
    * Get the employee that has the salary
    */
    public function employee()
    {
        return $this->belongsTo('App\Employees', 'emp_no');
    }
}

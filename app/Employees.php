<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'employees';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'birth_date',
        'first_name',
        'last_name',
        'gender',
        'hire_date'
    ];
    
    /**
     * Get the salary of the employee.
     */
     public function salaries() 
     {
         return $this->hasMany('App\Salaries', 'emp_no');
     }
     
     /**
     * Get the titles of the employee.
     */
     public function titles()
     {
         return $this->hasMany('App\Titles');
     }
     
     public function departments()
     {
         
     }
}

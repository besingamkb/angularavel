<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titles extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'titles';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'from_date',
        'to_date'
    ];
    
    /**
    * Get the employee that has the title
    */
    public function employee()
    {
        return $this->belongsTo('App\Employees', 'emp_no');
    }
}

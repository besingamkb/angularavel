<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagersDepartment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dept_manager';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'from_data',
        'to_date'
    ];
}

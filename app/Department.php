<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use SoftDeletes;

    CONST ACTIVE =  1;
    CONST DEACTIVE =  0;

    protected $table = 'departments';

    protected $fillable = ['name', 'manager_id'];

    protected static $rule = [
        'name' => 'required'
    ];

}

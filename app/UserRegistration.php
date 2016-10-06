<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRegistration extends Model
{
    use SoftDeletes;

    CONST ACTIVE=1;
    CONST DEACTIVE=0;

    protected $table = 'user_registrations';

    protected $fillable = ['user_id', 'first_name', 'last_name', 'department_id', 'status'];

    public static $rule = [
        'user_id' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'department_id' => 'required'
    ];

    public static $rule_update = [
        'first_name' => 'required',
        'last_name' => 'required',
        'department_id' => 'required'
    ];
}

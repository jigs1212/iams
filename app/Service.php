<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    CONST ACTIVE = 1;
    CONST DEACTIVE = 0;

    protected $table = service_register;

    protected $fillable = [
        'Service_call_no',
        'Problem',
        'date_of_registration',
        'date_of_resolved',
        'Problem_Solution',
        'remarks',
        'registered_by',
        'choices',
        'status',
    ];
}

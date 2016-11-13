<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestAsset extends Model
{
    use SoftDeletes;

    CONST PENDING = 2;
    CONST ACTIVE = 1;
    CONST DEACTIVE = 0;

    protected $table = 'requests';

    protected $fillable = [
        'asset_id',
        'requester_user_id',
        'date_to_be_allocated',
        'time_to_be_allocated',
        'date_of_return',
        'time_of_return',
        'purpose',
        'remarks',
        'status',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Request extends Model
{
    use SoftDeletes;

    CONST ACTIVE = 1;
    CONST DEACTIVE = 0;

    protected $table = 'asset';

    protected $fillable = [
        'asset_id',
        'user_id',
        'date_to_be_allocated',
        'date_of_return',
        'purpose',
        'remarks',
        'status',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asset extends Model
{
    use SoftDeletes;

    CONST ACTIVE = 1;
    CONST DEACTIVE = 0;

    protected $table = 'assets';

    protected $fillable = [
        'name',
        'description',
        'part_no',
        'vendor_name',
        'quantity',
        'type',
        'supplier_name',
        'bill_no',
        'amount',
        'date_of_purchase',
        'warranty_period',
        'customer_care_numbers',
        'customer_care_email',
        'vendor_website_support',
        'date_of_end_of_warranty',
        'status',
    ];
    public static $rule = [
        'name' => 'required',
        'description' => 'required',
        'part_no' => 'required',
        'vendor_name' => 'required',
        'quantity' => 'required',
        // 'type' => 'required',
        'supplier_name' => 'required',
        'bill_no' => 'required',
        'amount' => 'required',
        'date_of_purchase' => 'required',
        'warranty_period' => 'required',
        'customer_care_numbers' => 'required',
        'customer_care_email' => 'required',
        'vendor_website_support' => 'required',
        'date_of_end_of_warranty' => 'required',
        // 'status' => 'required',
    ];

}

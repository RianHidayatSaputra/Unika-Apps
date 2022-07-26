<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrOrdersDetail extends Model
{
    use HasFactory;

    protected $table = 'tr_orders_detail';
    protected $primaryKey = 'id';
    public $timestamps = false;
}

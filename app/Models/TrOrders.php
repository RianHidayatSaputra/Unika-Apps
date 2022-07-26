<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrOrders extends Model
{
    use HasFactory;

    protected $table = 'tr_orders';
    protected $primaryKey = 'id';
    public $timestamps = false;
}

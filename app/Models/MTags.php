<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MTags extends Model
{
    use HasFactory;

    protected $table = 'm_tags';
    protected $primaryKey = 'id';
    public $timestamps = false;
}

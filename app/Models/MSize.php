<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MSize extends Model
{
    use HasFactory;

    protected $table = 'm_size';
    protected $primaryKey = 'id';
    public $timestamps = false;
}

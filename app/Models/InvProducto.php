<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvProducto extends Model
{
    use SoftDeletes;
    
    Protected $table = 'inv_productos';
    protected $dates = ['deleted_at'];
}

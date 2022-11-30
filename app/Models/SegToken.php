<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SegToken extends Model
{
    use SoftDeletes;
    
    Protected $table = 'seg_tokens';
    protected $dates = ['deleted_at'];
    
}

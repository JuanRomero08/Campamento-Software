<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $fillable = [
    'id',
    'title',
    'text',
    'rating',
    'created_at',
    'updated_at',
    'bootcamp_id',
    'user_id'
];
}

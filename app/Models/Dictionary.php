<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'validated',
        'user_id'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

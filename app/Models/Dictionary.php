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
        'user_id',
        'user',
        'validated',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function entries() {
        return $this->hasMany(Entry::class, 'dictionary_id', 'id');
    }
}

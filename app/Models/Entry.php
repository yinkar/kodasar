<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    protected $fillable = [
        'command',
        'info',
        'dictionary_id',
        'dictionary',
        'user_id',
        'user',
        'ip',
        'library',
        'example',
        'extra',
        'validated',
    ];

    public function dictionary() {
        return $this->belongsTo(Dictionary::class, 'dictionary_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

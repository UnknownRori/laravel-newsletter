<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setTitleAttribute($value)
    {
        $this->attributes['slug'] = str($value)->slug();
        $this->attributes['title'] = $value;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

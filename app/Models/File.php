<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        // 'path',
    ];

    public function getUrlAttribute()
    {
        return Storage::url($this->path);
    }

    public function getCreatedAtForHumansAttribute()
    {
        return now()->diffForHumans($this->created_at);
    }
}

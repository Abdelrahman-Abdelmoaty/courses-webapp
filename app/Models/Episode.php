<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = ['chapter_id', 'name', 'description', 'url', 'duration', 'canonical', 'is_seen'];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
}

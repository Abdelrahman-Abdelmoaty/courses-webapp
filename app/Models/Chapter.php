<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'name', 'description', 'canonical'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}

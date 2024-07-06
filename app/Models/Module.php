<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['type', 'chapter_id'];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

}
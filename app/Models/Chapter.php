<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = ['title', 'is_locked', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}

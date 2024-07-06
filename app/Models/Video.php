<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['title', 'description', 'is_done', 'module_id'];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
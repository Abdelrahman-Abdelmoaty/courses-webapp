<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = ['title', 'module_id'];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
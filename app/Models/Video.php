<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = ['module_id', 'title', 'description', 'url', 'duration'];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
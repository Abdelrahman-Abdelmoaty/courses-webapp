<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Course extends Model
{
    use HasFactory, HasUuids;

    protected $keyType = 'uuid';

    public $incrementing = false;

    protected $fillable = ['name', 'description', 'canonical'];

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}

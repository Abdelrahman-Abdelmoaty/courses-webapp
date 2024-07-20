<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Episode extends Model
{
    use HasFactory, HasUuids;

    protected $keyType = 'uuid';

    public $incrementing = false;

    protected $fillable = ['chapter_id', 'name', 'description', 'url', 'duration', 'canonical'];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
}

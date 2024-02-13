<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;

class Onsen extends Model
{
    use HasFactory;
    protected $fillable = [
    'name',
    'body',
    'image_url'
    ];
    public function likes()
    {
        return $this->hasMany(Like::class);
        
    }
}

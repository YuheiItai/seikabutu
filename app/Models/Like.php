<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Onsen;

class Like extends Model
{
    use HasFactory;
    public function user()   
{
    return $this->belongsTo(User::class);  
}
public function onsen()   
{
    return $this->belongsTo(Onsen::class);  
}
}

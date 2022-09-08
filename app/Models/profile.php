<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = [
        'title',
        'description',
        'URL',
        'picture',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Publication extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "body",
        "image",
        "profile_id"
    ];
    public function profile()
    {
        return $this->belongsTo(Profile::class,'profile_id'); 
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'bio',
        'image',
        'password'
    ];
    public function publications(): HasMany {
        return $this->hasMany(Publication::class,'profile_id') ; 
    }
}

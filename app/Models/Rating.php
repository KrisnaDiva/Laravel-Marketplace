<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rating extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function reviews():HasMany{
        return $this->hasMany(Review::class);
    }
}

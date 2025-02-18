<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAddress extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=['id'];
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function province():BelongsTo{
        return $this->belongsTo(Province::class);
    }
    public function city():BelongsTo{
        return $this->belongsTo(City::class);
    }
    public function orders():HasMany{
        return $this->hasMany(Order::class);
    }
}

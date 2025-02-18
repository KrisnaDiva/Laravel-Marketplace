<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    use HasFactory;
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable=['id','name','province_id'];
    public function province():BelongsTo{
        return $this->belongsTo(Province::class);
    }
}

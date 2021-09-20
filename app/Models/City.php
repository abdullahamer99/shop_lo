<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    use HasFactory;  protected $table='cities';
    protected $primaryKey='id';

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class,'county_id','id');
    }
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class,'state_id','id');
    }
}

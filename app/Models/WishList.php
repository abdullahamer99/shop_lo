<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WishList extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id','wish-list'
    ];
    public function  customer(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

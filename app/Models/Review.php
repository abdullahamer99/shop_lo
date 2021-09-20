<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;protected $fillable = [
    'user_id', 'product_id', 'starts',
    'review'
];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    public function  humanFormattedDate(){
        return Carbon::createFromTimeStamp(strtotime($this->create_at))->diffForHumans();
    }
}

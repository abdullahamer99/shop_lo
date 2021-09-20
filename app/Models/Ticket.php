<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;  protected $fillable=[
    'user_id','order_id',
    'title',' message','status',
    'ticket_type_id'
];
    public function ticketTypes(): BelongsTo
    {
        return $this->belongsTo(TicketType::class);
    }
    public function customer(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}

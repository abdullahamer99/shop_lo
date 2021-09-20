<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'password','mobile',
        'shipping_address','billing_address','api_token',
        'email_verified','mobile_verified'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
//    public function  payments(): HasMany
//    {
//        return $this->hasMany(Payment::class);
//    }
    public  function  shipments(): HasMany
    {
        return $this->hasMany(Shipment::class);
    }
    public  function  shippingAddress(): HasOne
    {
        return $this->hasOne(Address::class,'id','shipping_address');
    }
    public  function  billingAddress(): HasOne
    {
        return $this->hasOne(Address::class,'id','billing_address');
    }
    public  function  wishList(): HasOne
    {
        return $this->hasOne(WishList::class,'id','billing_address');
    }
    public  function  reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
    public  function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    public function formattedName(){
        return $this->first_name.'  ' .$this->last_name;
    }
}

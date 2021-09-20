<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;  protected $fillable=[
    'title','description','unit','price',  'total','category_id',
  'discount','option'
];
    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
    public function hasUint(){
        return $this->belongsTo(Unit::class,'unit','id');
    }
    public function jsonOptions(){
        return json_decode($this->options);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailPoster extends Model
{
    public function category(): BelongsTo
    {
        return $this->belongsTo(Categories::class, 'category', 'title');
    }
    protected $fillable = ['id', 'title', 'date_lower', 'date_upper', 'price', 'category', 'image', 'address'];
}

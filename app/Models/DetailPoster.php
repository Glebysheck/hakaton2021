<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailPoster extends Model
{
    public function category(): BelongsTo
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }
    protected $fillable = ['id', 'title', 'date_lower', 'date_upper', 'price', 'category_id', 'image', 'address'];
}

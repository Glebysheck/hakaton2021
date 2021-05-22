<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categories extends Model
{
    public function detailposters(): HasMany
    {
        return $this->hasMany(DetailPoster::class);
    }
    protected $fillable = ['id', 'title', 'description', 'image'];
}

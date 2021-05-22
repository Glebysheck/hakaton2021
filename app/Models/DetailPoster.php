<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DetailPoster extends Model
{
    public function categories(): HasMany
    {
        return $this->hasMany(Categories::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PostersList extends Model
{
    public function detailposter(): HasMany
    {
        return $this->hasMany(DetailPoster::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Categories extends Model
{
    public function detailposter(): BelongsTo
    {
        return $this->belongsTo(DetailPoster::class, 'detailposter_id', 'id');
    }
}

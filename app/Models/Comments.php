<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comments extends Model
{
    public function post(): BelongsTo
    {
        return $this->belongsTo(Detail_Poster::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comments extends Model
{
    public function users(): HasMany
    {
        return $this->hasMany(Users::class);
    }
}

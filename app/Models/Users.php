<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Users extends Model
{
    public function posters(): HasMany
    {
        return $this->hasMany(Posterslist::class);
    }
}

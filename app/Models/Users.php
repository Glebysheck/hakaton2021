<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Users extends Model
{
    protected $fillable = ['id', 'name', 'email', 'password', 'api_token'];
}

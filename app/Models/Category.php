<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class Category extends Model
{
    use HasFactory;

    public function tracks(): HasMany
    {
        return $this->hasMany(Track::class);
    }
}

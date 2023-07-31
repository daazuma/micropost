<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

        /**
     * The roles that belong to the Micropost
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function favorite_users()
    {
        return $this->belongsToMany(User::class);
    }
}

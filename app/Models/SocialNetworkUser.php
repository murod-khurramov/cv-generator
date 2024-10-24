<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialNetworkUser extends Model
{
    /** @use HasFactory<\Database\Factories\SocialNetworkUserFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'username',
    ];
}

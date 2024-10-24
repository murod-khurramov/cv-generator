<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    /** @use HasFactory<\Database\Factories\SocialNetworkFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'link'
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillUser extends Model
{
    /** @use HasFactory<\Database\Factories\SkillUserFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'skill_id',
    ];
}

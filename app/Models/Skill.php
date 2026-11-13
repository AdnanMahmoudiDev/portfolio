<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'proficiency',
        'highlight',
        'sort_order',
        'is_featured',
    ];

    protected $casts = [
        'proficiency' => 'integer',
        'is_featured' => 'boolean',
        'sort_order' => 'integer',
    ];
}

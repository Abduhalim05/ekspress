<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Project extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'category_id',
        'slug',
        'location',
        'year',
        'company',
    ];
    protected $translatable = ['title', 'description'];
}

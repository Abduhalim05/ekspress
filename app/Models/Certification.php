<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Certification extends Model
{
    use HasFactory, Translatable;

    protected $fillable = ['category_id', 'image'];
    protected $translatable = ['title', 'description'];
}

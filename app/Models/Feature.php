<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Feature extends Model
{
    use HasFactory, Translatable;

    protected $fillable = ['image'];
    protected $translatable = ['first_title', 'second_title', 'description'];
}

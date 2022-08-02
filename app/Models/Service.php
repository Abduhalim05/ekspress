<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Service extends Model
{
    use HasFactory, Translatable;

    protected $fillable=[
         'image_home',
         'image_page',
         'telegram',
         'feature',
         'number',
    ];
    protected $translatable = ['title', 'description'];
}


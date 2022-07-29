<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class About extends Model
{
    use HasFactory, Translatable;

    protected $fillable=[
         'image',
         'instagram',
         'telegram',
         'youtube',
         'phone1',
         'phone2',
         'address',
    ];
    protected $translatable = ['title', 'description'];
}

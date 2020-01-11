<?php

namespace Seat\Akturis\About\Models;

use Illuminate\Database\Eloquent\Model;

class AboutInfo extends Model
{
    public $timestamps = false;

    protected $table = 'akturis_about_info';

    protected $fillable = ['id', 'content'];
}

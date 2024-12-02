<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    protected $table = 'parties';

    protected $fillable = ["name","acronym","color_code","logo_url"];
}

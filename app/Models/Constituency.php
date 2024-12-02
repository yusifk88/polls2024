<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Constituency extends Model
{
    protected $table = 'constituencies';
    protected $fillable = ["name", "description"];
}

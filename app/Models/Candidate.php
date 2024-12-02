<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = 'candidates';
    protected $fillable = ["party_id", "constituency_id", "name", "type", "photo_url", "uuid"];
}

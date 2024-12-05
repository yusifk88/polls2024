<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Constituency extends Model
{
    protected $table = 'constituencies';
    protected $fillable = ["name", "description"];

    public function candidates(): HasMany
    {
        return $this->hasMany(Candidate::class);
    }


}

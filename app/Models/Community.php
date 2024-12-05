<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Community extends Model
{
    protected $table = 'communities';
    protected $fillable = [
        "name", "description", "longitude", "latitude", "constituency_id"
    ];


    public function constituency(): BelongsTo
    {
        return $this->belongsTo(Constituency::class)->orderBy("name");
    }

}

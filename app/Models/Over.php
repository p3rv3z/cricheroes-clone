<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Over extends Model
{
    use HasFactory;

    public function bowler()
    {
        return $this->belongsTo(User::class, 'bowler_id');
    }

    public function bowls()
    {
        return $this->hasMany(Bowl::class);
    }
}

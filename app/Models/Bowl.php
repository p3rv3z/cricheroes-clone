<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ball extends Model
{
    use HasFactory;

    public function striker()
    {
        $this->belongsTo(User::class, 'striker_id');
    }

    public function over()
    {
        $this->belongsTo(Over::class);
    }
}

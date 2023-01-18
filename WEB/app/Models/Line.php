<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    use HasFactory;

    protected $fillable = ['destination_A', 'destination_B'];

    public function Line() {
        $this->hasMany(Stop::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCredit extends Model
{
    use HasFactory;

    protected $fillable = ['person_id', 'credit'];
    public function totalCredits()
    {
        UserCredit::all()->count();
    }

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}

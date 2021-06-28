<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Questionaire(){
        return $this->belongsTo(Questionaire::class);
    }

    public function Answer(){
        return $this->hasMany(Answer::class);
    }
}

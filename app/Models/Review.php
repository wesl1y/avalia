<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'evaluation_instrument',
        'status',
        'user_id',
        'evaluator_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

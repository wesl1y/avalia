<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluator extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'second_name',
        'cpf',
        'education',
        'state',
        'city',
        'bond',
        'email',
        'user_id',
        'password',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function axes()
    {
        return $this->hasMany(Axe::class);
    }
}

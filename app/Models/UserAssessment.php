<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserAssessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'stage',
        'answers',
        'friction',
        'status',
        'message',
    ];

    protected $casts = [
        'answers' => 'array', // automatically cast JSON to array
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

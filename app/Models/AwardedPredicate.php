<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwardedPredicate extends Model
{
    use HasFactory;
    
    protected $table = 'awarded_predicates';

    protected $fillable = ['user_id', 'comp', 'goal', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Predicate extends Model
{
    use HasFactory;

    protected $table = 'predicates';
    protected $fillable = [
        'user_id',
        'firstname',
        'lastname',
        'email',
        'contactperson',
        'company',
        'sector',
        'street',
        'postalcode',
        'city',
        'province',
        'involvement',
        'acknowledge',
        'steps',
        'impact',
        'collab',
        'results',
        'play',
        'proud',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

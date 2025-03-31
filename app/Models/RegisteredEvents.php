<?php

namespace App\Models;

use App\Livewire\Calender;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredEvents extends Model
{
    use HasFactory;
    
    protected $table = 'registered_events';

    protected $fillable = ['user_id', 'calendar_id'];

    public function calendar()
    {
        return $this->belongsTo(Calendar::class, 'calendar_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

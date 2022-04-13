<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'name', 'description', 'img', 'user_id', 'location_id'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    public function reservas()
    {
        return $this->hasOne(Reserva::class);
    }
    public function owner()
    {
        return $this->belongsTo(User::class);
    }
    
}

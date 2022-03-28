<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description', 'img', 'user_id', 'location_id'
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

}

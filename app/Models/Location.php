<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'address', 'resource_id'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function resources()
    {
        return $this->hasMany(Resource::class);
    }
}

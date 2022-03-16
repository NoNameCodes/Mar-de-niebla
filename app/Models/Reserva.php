<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','phone','coments','date','user_id','resource_id','location_id'
    ];
public function user(){
    return $this->hasMany(User::class);
}
public function resource(){
    return $this->belongsTo(Resource::class);
}
public function location(){
    return $this->belongsTo(Location::class);
}
    
}

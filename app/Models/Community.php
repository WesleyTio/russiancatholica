<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    //
    use HasFactory;


    protected $table = "communitys";

    protected $fillable = [
        'name',
        'history',
        'user_id',
        'area_id'
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function area(){

        return $this->belongsTo(Community::class);

    }

    public function churches(){

        return $this->hasMany(Church::class);

    }
}

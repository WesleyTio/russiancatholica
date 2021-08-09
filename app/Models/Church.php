<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'holypersons_id',
        'communitys_id',
        'images_id'
    ];

    public function holyperson(){

        return $this->belongsTo(Holyperson::class);

    }

    public function community(){

        return $this->belongsTo(Community::class);

    }

    public function image(){

        return $this->belongsTo(Image::class);

    }

    public function patrys(){

        return $this->hasMany(Patry::class);

    }
    

}

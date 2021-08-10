<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    //
    use HasFactory;

    protected $table = "churches";

    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'holyperson_id',
        'community_id',
        'image_id'
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

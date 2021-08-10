<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patry extends Model
{
    //
    use HasFactory;

    protected $table = "patrys";

    protected $fillable = [
        'theme',
        'date_init',
        'date_final',
        'churches_id',
        'images_id'
    ];

    public function church(){

        return $this->belongsTo(Church::class);

    }

    public function image(){

        return $this->belongsTo(Image::class);

    }
}

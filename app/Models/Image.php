<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    use HasFactory;

    protected $table = "images";

    protected $fillable = [
        'path'
    ];

    public function group(){

        return $this->hasOne(Group::class);

    }
    public function event(){

        return $this->hasOne(Event::class);

    }
    public function patry(){

        return $this->hasOne(Patry::class);

    }
    public function church(){

        return $this->hasOne(Church::class);

    }
}

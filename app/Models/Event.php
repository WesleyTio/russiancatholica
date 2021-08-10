<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    use HasFactory;

    protected $table = "events";

    protected $fillable = [
        'name',
        'date_init',
        'date_final',
        'group_id',
        'image_id'
    ];

    public function group(){

        return $this->belongsTo(Group::class);

    }

    public function image(){

        return $this->belongsTo(Image::class);

    }
}

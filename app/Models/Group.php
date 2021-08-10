<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    use HasFactory;

    protected $table = "groups";

    protected $fillable = [
        'name',
        'history',
        'link',
        'user_id',
        'image_id'
    ];

    public function user(){

        return $this->belongsTo(User::class);

    }

    public function image(){

        return $this->belongsTo(Image::class);

    }
    public function events(){

        return $this->hasMany(Event::class);

    }
}

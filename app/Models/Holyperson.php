<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holyperson extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'name',
        'history',
        'memorian_date'
    ];

    public function churches(){

        return $this->hasMany(Church::class);

    }
}

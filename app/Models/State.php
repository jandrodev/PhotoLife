<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';

    protected $fillable = ['name'];

    public function photo()
    {
        return $this->hasMany(Photo::class);
    }
}

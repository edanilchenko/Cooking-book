<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingridient extends Model
{
    protected $table = 'ingridients';
    protected $fillable = ['title'];

    /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
    public function foods(){
        return $this->belongsToMany(Food::class);
    }
}

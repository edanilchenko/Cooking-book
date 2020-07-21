<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';
    protected $fillable = ['title', 'image'];

    /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
    public function ingridients(){
        return $this->belongsToMany(Ingridient::class);
    }
}

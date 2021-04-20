<?php

namespace frutera;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['name', 'descripcion'];

    public function frutas()
    {
        return $this->belongsToMany(Fruta::class);
    }
}

<?php

namespace frutera;

use Illuminate\Database\Eloquent\Model;

class Fruta extends Model
{
   protected $fillable = ['name', 'precio', 'file', 'slug'];

	/**
    * Get the route key for the model.
    *
    * @return string
    */
   public function getRouteKeyName()
   {
      return 'slug';
   }

    public function categorias()
    {
    	return $this->belongsToMany(Categoria::class);
    }

      


}

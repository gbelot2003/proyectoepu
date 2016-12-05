<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recomendation extends Model
{

    protected $fillable = ['name', 'country_id'];

    public function derechos()
    {
        return $this->belongsToMany(Right::class);
    }

    public function institutions()
    {
        return $this->belongsToMany(Institution::class);
    }

    public function countries()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function calificacion()
    {
        return $this->hasMany(Calificacion::class, 'recomendacion_id', 'id');
    }


    public function getInstitutionListAttribute()
    {
        return $this->institutions->lists('id')->all();
    }

    /**
     *
     * @return mixed
     */
    public function getDerechosListAttribute()
    {
        return $this->derechos->lists('id')->all();
    }

    /**
     * Total de filas relacionadas
     * @return mixed
     */
    public function getCountCalificaAttribute()
    {
        return Calificacion::where('recomendacion_id', '=', $this->id)->get()->count();
    }

    /**
     * Obtenemos el total de calificaciones por registro
     * @return mixed
     */
    public function getSumCalificaAttribute()
    {
        return Calificacion::where('recomendacion_id', '=', $this->id)->get()->sum('calificacion');
    }

    public function getCaluloAttribute()
    {
        if($this->countCalifica == 0 || $this->SumCalifica == 0){
            return 0;
        }else{
            $promedio = ($this->SumCalifica / $this->countCalifica);
            //$promedio = $this->SumCalifica;
            return $promedio;
        }
    }

    public function getCalificaAttribute()
    {
        if($this->calulo < 3 ):
            $color = 'red';
        elseif($this->calulo < 4):
            $color = 'orange';
        elseif($this->calulo > 4):
            $color = 'green';
        else:
            $color = 'green';
        endif;

        return $color;


    }
}

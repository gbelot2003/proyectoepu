<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recomendation extends Model
{

    /**
     * @var array 3129-
     */
    protected $fillable = ['name', 'country_id', 'typeofrecomendations_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trecomendaciones()
    {
        return $this->belongsTo(Typeofrecomendations::class, 'typeofrecomendations_id', 'id');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function derechos()
    {
        return $this->belongsToMany(Right::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function institutions()
    {
        return $this->belongsToMany(Institution::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function countries()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function calificacion()
    {
        return $this->hasMany(Calificacion::class, 'recomendacion_id', 'id');
    }


    /**
     * @return mixed
     */
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
     * @return mixed
     */
    public function getTrecomendacionListAttribute()
    {
        return $this->trecomendaciones->lists('id')->all();
    }

    /**
     * Total de filas relacionadas
     * @return mixed
     */
    public function getCountCalificaAttribute()
    {
        return Calificacion::where('recomendacion_id', '=', $this->id)
                            ->where('status', '=', 1)->get()->count();
    }

    /**
     * Obtenemos el total de calificaciones por registro
     * @return mixed
     */
    public function getSumCalificaAttribute()
    {
        return Calificacion::where('recomendacion_id', '=', $this->id)
                        ->where('status', '=', 1)->get()->sum('calificacion');
    }


    /**
     * @return float|int
     */
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

    /**
     * @return string
     */
    public function getCalificaAttribute()
    {
        if($this->calulo < 3 ):
            $color = 'red-text';
        elseif($this->calulo < 4):
            $color = 'orange-text';
        elseif($this->calulo > 4):
            $color = 'green-text';
        else:
            $color = 'green-text';
        endif;

        return $color;


    }
}

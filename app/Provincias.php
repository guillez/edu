<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Paises;

class Provincias extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Provincias';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'fk_pais_id'];

    

    public function pais()
    {
        return $this->hasOne('App\Paises', 'id', 'fk_pais_id');
    } 

}

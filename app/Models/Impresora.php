<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Impresora extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'impresoras';

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
    protected $fillable = ['codigo', 'marca', 'modelo', 'tipo', 'serie'];

    public function formularios(){
        return $this->hasMany(Formulario::class);
    }

}

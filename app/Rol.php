<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $rol_id
 * @property string $rol
 * @property User[] $users
 */
class Rol extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'roles';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'rol_id';

    /**
     * @var array
     */
    protected $fillable = ['rol'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\User', 'rol_id', 'rol_id');
    }
}

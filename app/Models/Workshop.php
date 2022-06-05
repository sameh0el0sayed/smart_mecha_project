<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $description
 * @property string $location
 * @property int    $Active
 * @property int    $Health
 * @property int    $created_at
 * @property int    $updated_at
 */
class Workshop extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Workshop';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'VehicleID', 'UserID', 'description', 'location', 'Active', 'Health'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
         'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'description' => 'string', 'location' => 'string', 'Active' => 'int', 'Health' => 'int', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    // Scopes...

    // Functions ...

    // Relations ...
}

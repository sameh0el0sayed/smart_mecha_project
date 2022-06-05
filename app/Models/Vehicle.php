<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $Brand
 * @property string $Modal
 * @property int    $Year
 * @property int    $Kilometre
 * @property int    $created_at
 * @property int    $updated_at
 */
class Vehicle extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Vehicle';

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
        'Brand', 'Year', 'Modal', 'Kilometre'
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
        'Brand' => 'string', 'Year' => 'int', 'Modal' => 'string', 'Kilometre' => 'int', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property Date $Startdate
 * @property Date $Enddate
 * @property int  $DiscountType
 * @property int  $created_at
 * @property int  $updated_at
 */
class Coupon extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Coupon';

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
        'Startdate', 'Enddate', 'DiscountType', 'Value', 'created_at', 'updated_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Startdate' => 'date', 'Enddate' => 'date', 'DiscountType' => 'int', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'Startdate', 'Enddate', 'created_at', 'updated_at'
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

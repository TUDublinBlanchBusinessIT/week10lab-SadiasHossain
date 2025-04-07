<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class booking
 * @package App\Models
 * @version February 24, 2025, 3:26 pm UTC
 *
 * @property \App\Models\Member $memberid
 * @property \App\Models\Court $courtid
 * @property string $bookingdate
 * @property time $starttime
 * @property time $endtime
 * @property integer $memberid
 * @property integer $courtid
 * @property number $fee
 */
class booking extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'booking';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'bookingdate',
        'starttime',
        'endtime',
        'memberid',
        'courtid',
        'fee'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'bookingdate' => 'date',
        'memberid' => 'integer',
        'courtid' => 'integer',
        'fee' => 'decimal:3'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'bookingdate' => 'nullable',
        'starttime' => 'nullable',
        'endtime' => 'nullable',
        'memberid' => 'nullable|integer',
        'courtid' => 'nullable|integer',
        'fee' => 'nullable|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function memberid()
    {
        return $this->belongsTo(\App\Models\Member::class, 'memberid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function courtid()
    {
        return $this->belongsTo(\App\Models\Court::class, 'courtid');
    }
}

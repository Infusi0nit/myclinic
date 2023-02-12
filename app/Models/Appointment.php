<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;

    protected $guarded = [
        'id'
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }
     public function feeHead()
    {
        return $this->belongsTo('App\Models\FeeHead');
    }
    public function doctor()
    {
        return $this->belongsTo('App\Models\Doctor');
    }
    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }
    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }

}

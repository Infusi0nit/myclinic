<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Investigation extends Model
{
    use SoftDeletes;

    protected $guarded = [
        'id',
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }
    public function investigation_details()
    {
        return $this->hasMany('App\Models\InvestigationDetail');
    }
    public function patient()
    {
        return $this->belongsTo('App\Models\patient');
    }
}

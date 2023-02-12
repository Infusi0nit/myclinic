<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvestigationDetail extends Model
{
    use SoftDeletes;

    protected $guarded = [
        'id'
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }
    public function Investigation()
    {
        return $this->belongsTo('App\Models\Investigation');
    }
    public function medical_test()
    {
        return $this->belongsTo('App\Models\MedicalTest');
    }
}

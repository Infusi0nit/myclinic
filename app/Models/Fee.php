<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fee extends Model
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
}

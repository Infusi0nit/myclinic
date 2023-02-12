<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedicalTest extends Model
{
    use SoftDeletes;

    protected $guarded = [
        'id'
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }
    public function setNameAttribute($value)
    {
      $this->attributes['name']=ucwords($value);
    }
     

}

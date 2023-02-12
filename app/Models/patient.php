<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class patient extends Model
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
        $this->attributes['name'] = ucwords($value);
    }
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->middle_name} {$this->last_name}";
    }
    public function appointment()
    {
        return $this->hasOne('App\Models\Appointment');
    }
}

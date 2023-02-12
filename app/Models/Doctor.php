<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use softDeletes;

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
    public function department()
    {
        return $this->belongsTo('App\Models\Department', 'department_id');
    }
    public function getFullNameAttribute()
    {
        return "Dr.{$this->first_name} {$this->middle_name} {$this->last_name}";
    }
    public function appointments()
    {
    return $this->hasMany('App\Models\Appointment');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    public function devices(){
        return $this->hasOne('App\Models\Device','id','device_id');
    }

    public function companies(){
        return $this->hasOne('App\Models\Company','id','company_id');
    }

    public function plugins(){
        return $this->hasOne('App\Models\Plugin','id','plugin_id');
    }
}

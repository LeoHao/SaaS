<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    public function device(){
        return $this->hasOne('App\Models\Device','id','device_id');
    }

    public function company(){
        return $this->hasOne('App\Models\Company','id','company_id');
    }

    public function plugin(){
        return $this->hasOne('App\Models\Plugin','id','plugin_id');
    }

    public function duration(){
        return $this->hasOne('App\Models\Duration','id','duration_id');
    }

    public function bandwidth(){
        return $this->hasOne('App\Models\Bandwidth','id','bandwidth_id');
    }
}

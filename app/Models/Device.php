<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;


    public function companyPlugins(){
        return $this->hasMany('App\Models\CompanyPlugin','company_id','company_id')->where('company_plugins.status',  1);
    }
}

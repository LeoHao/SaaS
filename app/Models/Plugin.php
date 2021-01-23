<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plugin extends Model
{
    use HasFactory;

    public function companyPlugins(){
        return $this->hasOne('App\Models\CompanyPlugin','plugin_id');
    }
}

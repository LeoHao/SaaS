<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyPlugin extends Model
{
    use HasFactory;

    protected $fillable = ['plugin_id','company_id','status'];

    public function post()
    {
        return $this->belongsTo('App\Models\Plugin', 'id','plugin_id');
    }
}

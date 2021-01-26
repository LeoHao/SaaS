<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Services\PaasService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplyController extends Controller
{
    public function special(Request $request){
        $paas = new PaasService();
        $node_model = [];

        $mac = [];
        $extParams = [];
        $extParams['node'] = $node_model;
        $paas->send('plugins_network_special_open',$mac,$extParams);
    }
}

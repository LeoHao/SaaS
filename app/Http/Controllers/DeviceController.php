<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Services\PaasService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DeviceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index(Request $request)
    {
        $data = Device::where('company_id', Auth::user()->company_id)->get();
        return view('device.index', [
            'data' => $data,
        ]);
    }

    public function create()
    {
        return view('device.create');
    }

    public function store(Request $request)
    {
        $device_is_online = DB::table('paas.devices')->select(['mac'])->where('mac', $request->mac)->get()->isNotEmpty();
        $device_is_exists = DB::table('saas.devices')->select(['mac'])->where('mac', $request->mac)->get()->isEmpty();
        if ($device_is_online && $device_is_exists) {
            $params = $request->toArray();
            unset($params['_token']);
            $model             = new Device();
            $model->name       = $request->name;
            $model->mac        = $request->mac;
            $model->sn         = $request->sn;
            $model->company_id = $request->company_id;
            $model->save();

            $message = [
                'type' => 'success',
                'message' => '设备添加成功',
            ];
        }

        if (!$device_is_online){
            $message = [
                'type' => 'warning',
                'message' => '设备不在线,请连入网络',
            ];
        }

        if (!$device_is_exists){
            $message = [
                'type' => 'danger',
                'message' => '设备已被绑定或设备Mac地址错误',
            ];
        }

        $request->session()->flash('message', $message);
        return redirect()->route('device.create');
    }


    public function specialOpen(Request $request){
        $paas = new PaasService();
        $node_model = [];

        $mac = [];
        $extParams = [];
        $extParams['node'] = $node_model;
        $paas->send('plugins_network_special_open',$mac,$extParams);
    }
}

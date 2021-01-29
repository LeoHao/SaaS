<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Dest;
use App\Models\Device;
use App\Models\Node;
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
//        $this->middleware('admin');
    }

    public function index(Request $request)
    {

        //        $device = DB::table('saas.devices as sd')
        //            ->leftJoin('paas.devices as pd', 'sd.id', '=', 'pd.id')
        //            ->get();
        $data = Device::where('company_id', 2)->with(['companyPlugins'])->paginate(20);
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
                'type'    => 'success',
                'message' => '设备添加成功',
            ];
        }

        if (!$device_is_online) {
            $message = [
                'type'    => 'warning',
                'message' => '设备不在线,请连入网络',
            ];
        }

        if (!$device_is_exists) {
            $message = [
                'type'    => 'danger',
                'message' => '设备已被绑定或设备Mac地址错误',
            ];
        }

        $request->session()->flash('message', $message);
        return redirect()->route('device.create');
    }

    public function edit(Request $request)
    {
        $model = Device::where('id', '=', $request->input('id'))->first();
        return view('device.edit', [
            'data' => $model,
        ]);
    }

    public function update(Request $request)
    {
        $model       = Device::where('id', '=', $request->input('id'))->first();
        $model->name = $request->input('name');
        $model->save();

        $message = [
            'type'    => 'success',
            'message' => '更新成功',
        ];

        $request->session()->flash('message', $message);
        return redirect()->route('device.edit', ['id' => $request->input('id')]);
    }

    public function special(Request $request)
    {
        $device_model = Device::find($request->input('device_id'));
        $node         = Node::all();
        $dest         = Dest::all();

        return view('device.special', [
            'device' => $device_model,
            'nodes'   => $node,
            'dests'   => $dest,
        ]);
    }

    public function specialOpen(Request $request)
    {
        $model               = new Application;
        $model->company_id   = Auth::user()->company_id;
        $model->device_id    = $request->input('device_id');
        $model->duration_id  = $request->input('duration'); //时长
        $model->bandwidth_id = $request->input('bandwidth');//带宽
        $model->plugin_id    = $request->input('plugin_id');//插件
        $model->node_id      = $request->input('node_id');  //所在地
        $model->dest_id      = $request->input('dest_id');  //目的地
        $model->save();


        return redirect()->route('device.index');
    }

    public function siteSpeed(Request $request)
    {
        $device_model      = Device::find($request->input('device_id'));
        $location_model    = [];
        $destination_model = [];

        return view('device.site-speed', [
            'device'      => $device_model,
            'location'    => $location_model,
            'destination' => $destination_model,
        ]);
    }

    public function siteSpeedOpen(Request $request)
    {
        $model              = new Application;
        $model->company_id  = Auth::user()->company_id;
        $model->device_id   = $request->input('device_id');
        $model->duration_id = $request->input('duration'); //时长
        $model->plugin_id   = $request->input('plugin_id');//插件
        $model->save();

        $message = [
            'type'    => 'success',
            'message' => '审核中',
        ];

        return $message;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Device;
use App\Services\PaasService;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{

    public function index()
    {
        $data = Application::with([
            'device',
            'company',
            'plugin',
            'duration',
            'bandwidth',
            'dest',
            'node',
        ])->paginate(20);
        return view('application.index', [
            'data' => $data,
        ]);
    }

    public function passed(Request $request)
    {
        $model = Application::with('bandwidth', 'dest', 'node')->find($request->input('id'));

        $model->status = 1;
        $model->save();

        $device = Device::find($model->device_id)->toArray();

        $push = new PaasService();
        $push->send('plugins_network_special_open', $device, $model->toArray());
        return redirect()->route('application.index');
    }

    public function rejected(Request $request)
    {
        $model         = Application::find($request->input('id'));
        $model->status = -1;
        $model->save();

        return redirect()->route('application.index');
    }
}

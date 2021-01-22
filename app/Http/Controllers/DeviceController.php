<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $data = Device::where('cid',Auth::user()->cid)->get();
        return view('device.index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('device.create');
    }
}

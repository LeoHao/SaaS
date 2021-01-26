<?php

namespace App\Http\Controllers;

use App\Models\CompanyPlugin;
use App\Models\Menulist;
use App\Models\Menurole;
use App\Models\Menus;
use App\Models\Plugin;
use App\Services\RolesService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PluginController extends Controller
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

    public function getValidateArray()
    {
        return [
            'name' => 'required|string',
            'present' => 'required|string',
            'description' => 'required|string',
        ];
    }

    public function index(Request $request)
    {
        $data = Plugin::with('companyPlugins')->paginate(20);
        return view('plugin.index', [
            'data' => $data,
        ]);
    }

    public function show(Request $request)
    {
        $model = Plugin::where('id', '=', $request->input('id'))->first();
        return view('plugin.show', [
            'data' => $model,
        ]);
    }

    public function create()
    {
        return view('plugin.create');
    }

    public function store(Request $request)
    {
        $request->validate($this->getValidateArray());

        $model              = new Plugin();
        $model->name        = $request->input('name');
        $model->present     = $request->input('present');
        $model->description = $request->input('description');
        $model->status = 0;
        $model->save();

        $message = [
            'type' => 'success',
            'message' => '添加成功',
        ];

        $request->session()->flash('message', $message);

        return redirect()->route('plugin.index');
    }

    public function edit(Request $request)
    {
        $model = Plugin::where('id', '=', $request->input('id'))->first();
        return view('plugin.edit', [
            'data' => $model,
        ]);
    }

    public function update(Request $request)
    {
        $request->validate($this->getValidateArray());

        $model = Plugin::where('id', '=', $request->input('id'))->first();
        $model->name = $request->input('name');
        $model->present = $request->input('present');
        $model->description = $request->input('description');
        $model->status = $request->input('status');;
        $model->save();

        $message = [
            'type' => 'success',
            'message' => '更新成功',
        ];

        $request->session()->flash('message', $message);
        return redirect()->route('plugin.edit', ['id'=>$request->input('id')]);
    }

    public function delete(Request $request){
        $model = Plugin::where('id', '=', $request->input('id'))->first();
        $model->delete();

        return redirect()->route('plugin.index');
    }

    public function market(Request $request)
    {
        $data = Plugin::with('companyPlugins')->where('status' , 1)->get();
        return view('plugin.market', [
            'data' => $data,
        ]);
    }

    public function open(Request $request)
    {
        $model = CompanyPlugin::updateOrCreate(['company_id' => Auth::user()->company_id, 'plugin_id' => $request->input('id')], ['status' => $request->input('status')]);
        $response = [
            'id' => $model->id,
            'pid' => $request->id,
            'status' => $model->status,
        ];
        return response()->json($response);
    }
}

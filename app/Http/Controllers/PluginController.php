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
            'menu' => 'required|string', 'present' => 'required|string', 'description' => 'required|string',
        ];
    }

    public function index(Request $request)
    {
        $data = Plugin::all();
        return view('plugin.index', [
            'data' => $data,
        ]);
    }

    public function show(Request $request)
    {
        $data = Plugin::all();
        return view('plugin.show', [
            'data' => $data,
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
        $model->save();
        $request->session()->flash('message', '添加成功');
        return redirect()->route('plugin.index');
    }


    public function edit(Request $request)
    {
        return view('plugin.edit', [
            'data' => Plugin::where('id', '=', $request->input('id'))->get(),
        ]);
    }

    public function update(Request $request)
    {

        $validatedData = $request->validate($this->getValidateArray());


        $menus          = Menus::where('id', '=', $request->input('id'))->first();
        $menus->slug    = $request->input('type');
        $menus->menu_id = $request->input('menu');
        $menus->icon    = $request->input('icon');
        $menus->href    = $request->input('href');
        $menus->name    = $request->input('name');
        if ($request->input('type') === 'title' || $request->input('parent') === 'none') {
            $menus->parent_id = null;
        } else {
            if ($request->input('parent') === $request->input('id')) { //can't be self parent
                $menus->parent_id = null;
            } else {
                $menus->parent_id = $request->input('parent');
            }
        }
        $menus->save();
        Menurole::where('menus_id', '=', $request->input('id'))->delete();
        if ($request->has('role')) {
            foreach ($request->input('role') as $role) {
                $menuRole            = new Menurole();
                $menuRole->role_name = $role;
                $menuRole->menus_id  = $request->input('id');
                $menuRole->save();
            }
        }
        $request->session()->flash('message', 'Successfully update menu element');
        return redirect()->route('menu.edit', ['id' => $request->input('id')]);
    }

    public function delete(Request $request)
    {
        $model = Plugin::where('id', '=', $request->input('id'))->first();
        //        $model->delete();
        $where = [
            ['plugin_id', '=', $model->id], ['status', '!=', 2],
        ];
        $companyPluginModel = CompanyPlugin::where($where);
        if (empty($companyPluginModel->get())){
            $model->delete();
            $companyPluginModel->delete();
        }

        $request->session()->flash('message', 'Successfully deleted menu element');
        $request->session()->flash('back', 'plugin.index');
        $request->session()->flash('backParams', ['id' => $model->id]);
        return view('plugin.index');
    }

}

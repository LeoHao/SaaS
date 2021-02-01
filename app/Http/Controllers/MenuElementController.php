<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menurole;
use App\Models\Menus;
use Illuminate\Validation\Rule;
use App\Services\RolesService;

class MenuElementController extends Controller
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
        $menuInfo = Menus::select('menus.*')->orderBy('menus.sequence', 'asc')->paginate(20);

        return view('editmenu.index', [
            'role'       => 'admin',
            'roles'      => RolesService::get(),
            'menuToEdit' => $menuInfo,
        ]);
    }

    public function moveUp(Request $request)
    {
        $element       = Menus::where('id', '=', $request->input('id'))->first();
        $switchElement = Menus::where('sequence', '<', $element->sequence)->orderBy('sequence', 'desc')->first();
        if (!empty($switchElement)) {
            $temp                    = $element->sequence;
            $element->sequence       = $switchElement->sequence;
            $switchElement->sequence = $temp;
            $element->save();
            $switchElement->save();
        }
        return redirect()->route('menu.index');
    }

    public function moveDown(Request $request)
    {
        $element       = Menus::where('id', '=', $request->input('id'))->first();
        $switchElement = Menus::where('sequence', '>', $element->sequence)->orderBy('sequence', 'asc')->first();
        if (!empty($switchElement)) {
            $temp                    = $element->sequence;
            $element->sequence       = $switchElement->sequence;
            $switchElement->sequence = $temp;
            $element->save();
            $switchElement->save();
        }
        return redirect()->route('menu.index', );
    }

    public function getParents(Request $request)
    {
        $result = Menus::where('menus.slug', '=', 'dropdown')->orderBy('menus.sequence', 'asc')->get();
        return response()->json($result);
    }

    public function create()
    {
        return view('editmenu.create', [
            'roles'    => RolesService::get(),
        ]);
    }

    public function getValidateArray()
    {
        $result = [
            'role' => 'required|array',
            'type' => [
                'required',
                Rule::in([
                    'link',
                    'title',
                    'dropdown',
                ]),
            ],
        ];
        return $result;
    }

    public function getNextSequence()
    {
        $result = Menus::select('menus.sequence')->orderBy('menus.sequence', 'desc')->first();
        if (empty($result)) {
            $result = 1;
        } else {
            $result = (integer) $result['sequence'] + 1;
        }
        return $result;
    }

    public function store(Request $request)
    {
        $validatedData  = $request->validate($this->getValidateArray());
        $menus          = new Menus();
        $menus->slug    = $request->input('type');
        $menus->name    = $request->input('name');
        if (strlen($request->input('icon')) > 0) {
            $menus->icon = $request->input('icon');
        }
        if (strlen($request->input('href')) > 0) {
            $menus->href = $request->input('href');
        }
        if ($request->input('type') !== 'title' && $request->input('parent') !== 'none') {
            $menus->parent_id = $request->input('parent');
        }
        $menus->sequence = $this->getNextSequence();
        $menus->save();
        foreach ($request->input('role') as $role) {
            $menuRole            = new Menurole();
            $menuRole->role_name = $role;
            $menuRole->menus_id  = $menus->id;
            $menuRole->save();
        }
        $request->session()->flash('message', 'Successfully created menu element');
        return redirect()->route('menu.create');
    }

    public function edit(Request $request)
    {


        return view('editmenu.edit', [
            'roles'       => RolesService::get(),
            'menuElement' => Menus::where('id', '=', $request->input('id'))->first(),
            'menuroles'   => Menurole::where('menus_id', '=', $request->input('id'))->get(),
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate($this->getValidateArray());

        $menus          = Menus::where('id', '=', $request->input('id'))->first();
        $menus->slug    = $request->input('type');
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

    public function show(Request $request)
    {
        $menuElement = Menus::join('menus as mparent', 'menus.parent_id', '=', 'mparent.id')->select('menus.*', 'mparent.name as parent_name')->where('menus.id', '=', $request->input('id'))->first();
        if (empty($menuElement)) {
            $menuElement = Menus::where('id', '=', $request->input('id'))->first();
        }
        return view('editmenu.show', [
            'menuElement' => $menuElement,
            'menuroles'   => Menurole::where('menus_id', '=', $request->input('id'))->get(),
        ]);
    }

    public function delete(Request $request)
    {
        $menus  = Menus::where('id', '=', $request->input('id'))->first();
        $menus->delete();
        Menurole::where('menus_id', '=', $request->input('id'))->delete();
        $request->session()->flash('message', 'Successfully deleted menu element');
        $request->session()->flash('back', 'menu.index');
        $request->session()->flash('backParams');
        return view('shared.universal-info');
    }

}

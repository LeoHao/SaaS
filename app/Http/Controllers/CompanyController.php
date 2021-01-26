<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
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
        $data = Company::paginate(1);
        return view('company.index', [
            'data' => $data,
        ]);
    }

    public function create()
    {
        return view('company.create', []);
    }

    public function store(Request $request)
    {
        $validatedData  = $request->validate([
            'name' => 'required|min:1|max:64',
        ]);
        $model       = new Company();
        $model->name = $request->input('name');
        $model->description = $request->input('description');
        $model->save();
        $request->session()->flash('message', 'Successfully created menu');
        return redirect()->route('company.index');
    }

    public function edit(Request $request)
    {
        $model = Company::where('id', '=', $request->input('id'))->first();
        return view('company.edit', [
            'data' => $model,
        ]);
    }

    public function update(Request $request)
    {
        $model = Company::where('id', '=', $request->input('id'))->first();
        $model->name = $request->input('name');
        $model->description = $request->input('description');
        $model->save();

        $message = [
            'type' => 'success',
            'message' => '更新成功',
        ];

        $request->session()->flash('message', $message);
        return redirect()->route('company.edit', ['id'=>$request->input('id')]);
    }

    public function delete(Request $request){
        $model = Company::where('id', '=', $request->input('id'))->first();
        $model->delete();

        return redirect()->route('company.index');
    }

}

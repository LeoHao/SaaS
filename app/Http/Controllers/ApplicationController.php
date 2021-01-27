<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{

    public function index(){
        $data = Application::with(['device','company','plugin','duration','bandwidth'])->paginate(20);
        return view('application.index', [
            'data' => $data,
        ]);
    }

    public function passed(Request $request){
        $model = Application::find($request->input('id'));
        $model->status = 1;
        $model->save();

        return redirect()->route('application.index');
    }

    public function rejected(Request $request){
        $model = Application::find($request->input('id'));
        $model->status = -1;
        $model->save();

        return redirect()->route('application.index');
    }
}

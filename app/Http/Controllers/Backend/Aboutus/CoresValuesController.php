<?php

namespace App\Http\Controllers\Backend\Aboutus;

use App\Http\Controllers\Controller;
use App\Models\CoreValue;
use Illuminate\Http\Request;

class CoresValuesController extends Controller
{
    public function index()
    {
        $data = CoreValue::all();

        return view('backend.coreValues.index', compact('data'));
    }

    public function Create()
    {
        return view('backend.coreValues.create');
    }

    public function Store(Request $request)
    {
        $request->validate([
            'type' => 'required',

        ]);


        $data = new CoreValue();
        $data->type = $request->type;
        $data->description = $request->description;

        $data->save();
        return redirect('/values')->with('message', 'Values has been added successfully');
    }

    public function edit($id)
    {
        $data = CoreValue::find($id);

        return view('backend.coreValues.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = CoreValue::find($id);

        $data->type = $request->type;
        $data->description = $request->description;

        $data->save();
        return redirect('/values')->with('message', 'Values has been updated successfully');
    }

    public function delete($id)
    {
        $data = CoreValue::find($id);

        $data->delete();

        return redirect('values')->with('message', 'Values has been deleted');
    }
}

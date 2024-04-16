<?php

namespace App\Http\Controllers\Backend\Grants;

use App\Http\Controllers\Controller;
use App\Models\Grants;
use Illuminate\Http\Request;

class GrantsController extends Controller
{
    public function index()
    {
        $data = Grants::orderBy('id', 'DESC')->get();

        return view('backend.grants.index', compact('data'));
    }

    public function Create()
    {
        return view('backend.grants.create');
    }

    public function Store(Request $request)
    {
        $data = new Grants();

        $data->description = $request->description;
     
        $data->save();
        return redirect('grants')->with('message', 'grants added successfully');
    }

    public function edit($id)
    {
      $data = Grants::find($id);
 
      return view('backend.grants.edit', compact('data'));
    }

    
   public function update(Request $request, $id)
   {
        $data = Grants::find($id);

        if (!$data) {
            return redirect('grants')->with('error', 'Service not found');
        }

        $data->description = $request->description;

        try {
            // Save the updated data
            $data->save();
            return redirect('grants')->with('message', 'grants updated successfully');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return redirect('grants')->with('error', 'Error occurred while updating data');
        }
        
   }

   public function delete($id)
    {
        $data = Grants::find($id);

        if (!$data) {
            return redirect('grants')->with('error', 'Data not found');
        }

      

        try {
            // Delete the data from the database
            $data->delete();

            return redirect('grants')->with('message', 'grants deleted successfully');
        } catch (\Exception $e) {
            // image the error or handle it as needed
            return redirect('grants')->with('error', 'Error occured deleting grants');
        }
    }
}

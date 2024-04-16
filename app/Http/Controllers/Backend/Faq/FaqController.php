<?php

namespace App\Http\Controllers\Backend\Faq;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $data = Faq::orderBy('id', 'DESC')->get();

        return view('backend.Faq.index', compact('data'));
    }

    public function Create()
    {
        return view('backend.Faq.create');
    }

    public function Store(Request $request)
    {
        $data = new Faq();

        $data->title = $request->title;
        $data->description = $request->description;

        $data->save();
        return redirect('faq')->with('message', 'Faq added successfully');
    }

    public function edit($id)
    {
      $data = Faq::find($id);
 
      return view('backend.Faq.edit', compact('data'));
    }

    
   public function update(Request $request, $id)
   {
        $data = Faq::find($id);

        if (!$data) {
            return redirect('faq')->with('error', 'Data not found');
        }

        $data->title = $request->title;
        $data->description = $request->description;

        try {
            // Save the updated data
            $data->save();
            return redirect('faq')->with('message', 'Faq updated successfully');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return redirect('faq')->with('error', 'Error occurred while updating data');
        }
        
   }

   public function delete($id)
    {
        $data = Faq::find($id);

        if (!$data) {
            return redirect('faq')->with('error', 'Data not found');
        }

        try {
            // Delete data from the database
            $data->delete();

            return redirect('faq')->with('message', 'Faq deleted successfully');
        } catch (\Exception $e) {
            // error handle it as needed
            return redirect('faq')->with('error', 'Error occured deleting Faq');
        }
    }
}

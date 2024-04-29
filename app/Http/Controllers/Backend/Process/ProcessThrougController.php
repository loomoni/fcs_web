<?php

namespace App\Http\Controllers\Backend\Process;

use App\Http\Controllers\Controller;
use App\Models\ProcessThrough;
use Illuminate\Http\Request;

class ProcessThrougController extends Controller
{
    public function index()
    {
        $data = ProcessThrough::all();
        return view('backend.ProcessThrough.index', compact('data'));
    }

    public function Create()
    {
        return view('backend.ProcessThrough.create');
    }

    public function Store(Request $request)
    {
        $data = new ProcessThrough();

        $data->title = $request->title;
        $data->description = $request->description;
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();        
            $image->move(public_path('/images/ProcessThrough/'), $imageName);
            $data->image = $imageName;
        }

        $data->save();
        return redirect('ProcessThrough')->with('message', 'About us added successfully');
    }

    public function edit($id)
    {
      $data = ProcessThrough::find($id);
 
      return view('backend.ProcessThrough.edit', compact('data'));
    }

    
   public function update(Request $request, $id)
   {
        $data = ProcessThrough::find($id);

        if (!$data) {
            return redirect('ProcessThrough')->with('error', 'Service not found');
        }

        // Handle image update
        if ($request->hasFile('image')) {
        
            // Delete the old image if it exists
            if ($data->image) {
                $oldImagePath = public_path('/images/ProcessThrough/') . $data->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();        
                $image->move(public_path('/images/ProcessThrough/'), $imageName);
                $data->image = $imageName;
            }

        }

        $data->title = $request->title;
        $data->description = $request->description;

        try {
            // Save the updated data
            $data->save();
            return redirect('ProcessThrough')->with('message', 'About us updated successfully');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return redirect('ProcessThrough')->with('error', 'Error occurred while updating data');
        }
        
   }

   public function delete($id)
   {
       $data = ProcessThrough::find($id);

       if (!$data) {
           return redirect('ProcessThrough')->with('error', 'Data not found');
       }

       // Retrieve the image path
       $imagePath = public_path('/images/ProcessThrough/') . $data->image;

       try {
           // Delete the data from the database
           $data->delete();

           // Delete the image file if it exists
           if (file_exists($imagePath)) {
               unlink($imagePath);
           }

           return redirect('ProcessThrough')->with('message', 'About us deleted successfully');
       } catch (\Exception $e) {
           // image the error or handle it as needed
           return redirect('ProcessThrough')->with('error', 'Error occured deleting About us');
       }
   }
}

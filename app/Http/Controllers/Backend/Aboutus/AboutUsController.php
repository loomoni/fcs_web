<?php

namespace App\Http\Controllers\Backend\Aboutus;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $data = AboutUs::all();
        return view('backend.AboutUs.index', compact('data'));
    }

    public function Create()
    {
        return view('backend.AboutUs.create');
    }

    public function Store(Request $request)
    {
        $data = new AboutUs();

        $data->title = $request->title;
        $data->description = $request->description;
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();        
            $image->move(public_path('/images/aboutUs/'), $imageName);
            $data->image = $imageName;
        }

        $data->save();
        return redirect('about-us')->with('message', 'About us added successfully');
    }

    public function edit($id)
    {
      $data = AboutUs::find($id);
 
      return view('backend.aboutUs.edit', compact('data'));
    }

    
   public function update(Request $request, $id)
   {
        $data = AboutUs::find($id);

        if (!$data) {
            return redirect('about-us')->with('error', 'Service not found');
        }

        // Handle image update
        if ($request->hasFile('image')) {
        
            // Delete the old image if it exists
            if ($data->image) {
                $oldImagePath = public_path('/images/aboutUs/') . $data->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();        
                $image->move(public_path('/images/aboutUs/'), $imageName);
                $data->image = $imageName;
            }

        }

        $data->title = $request->title;
        $data->description = $request->description;

        try {
            // Save the updated data
            $data->save();
            return redirect('about-us')->with('message', 'About us updated successfully');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return redirect('about-us')->with('error', 'Error occurred while updating data');
        }
        
   }

   public function delete($id)
   {
       $data = AboutUs::find($id);

       if (!$data) {
           return redirect('about-us')->with('error', 'Data not found');
       }

       // Retrieve the image path
       $imagePath = public_path('/images/aboutUs/') . $data->image;

       try {
           // Delete the data from the database
           $data->delete();

           // Delete the image file if it exists
           if (file_exists($imagePath)) {
               unlink($imagePath);
           }

           return redirect('about-us')->with('message', 'About us deleted successfully');
       } catch (\Exception $e) {
           // image the error or handle it as needed
           return redirect('about-us')->with('error', 'Error occured deleting About us');
       }
   }

 
}
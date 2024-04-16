<?php

namespace App\Http\Controllers\Backend\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::orderBy('id', 'DESC')->get();

        return view('backend.blog.index', compact('data'));
    }

    public function Create()
    {
        return view('backend.Blog.create');
    }

    public function Store(Request $request)
    {
        $data = new Blog();

        $data->title = $request->title;
        $data->description = $request->description;
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();        
            $image->move(public_path('/images/Blog/'), $imageName);
            $data->image = $imageName;
        }

        $data->save();
        return redirect('blog')->with('message', 'Blog added successfully');
    }

    public function edit($id)
    {
      $data = Blog::find($id);
 
      return view('backend.Blog.edit', compact('data'));
    }

    
   public function update(Request $request, $id)
   {
        $data = Blog::find($id);

        if (!$data) {
            return redirect('blog')->with('error', 'Service not found');
        }

        // Handle image update
        if ($request->hasFile('image')) {
        
            // Delete the old image if it exists
            if ($data->image) {
                $oldImagePath = public_path('/images/Blog/') . $data->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();        
                $image->move(public_path('/images/Blog/'), $imageName);
                $data->image = $imageName;
            }

        }

        $data->title = $request->title;
        $data->description = $request->description;

        try {
            // Save the updated data
            $data->save();
            return redirect('blog')->with('message', 'Blog updated successfully');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return redirect('blog')->with('error', 'Error occurred while updating data');
        }
        
   }

   public function delete($id)
    {
        $data = Blog::find($id);

        if (!$data) {
            return redirect('blog')->with('error', 'Data not found');
        }

        // Retrieve the image path
        $imagePath = public_path('/images/Blog/') . $data->image;

        try {
            // Delete the data from the database
            $data->delete();

            // Delete the image file if it exists
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            return redirect('blog')->with('message', 'Blog deleted successfully');
        } catch (\Exception $e) {
            // image the error or handle it as needed
            return redirect('blog')->with('error', 'Error occured deleting Blog');
        }
    }
}

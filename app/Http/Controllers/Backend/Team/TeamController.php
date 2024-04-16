<?php

namespace App\Http\Controllers\Backend\Team;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $data = Team::all();

        return view('backend.team.index', compact('data'));
    }

    public function Create()
    {
        return view('backend.team.create');
    }

    public function Store(Request $request)
    {
        $data = new Team();

        $data->name = $request->name;
        $data->type = $request->type;
        $data->position = $request->position;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();        
            $image->move(public_path('/images/team/'), $imageName);
            $data->image = $imageName;
        }

        $data->save();
        return redirect('/team')->with('message', 'Team Member  added successfully');

    }

    public function edit($id)
    {
        $data = Team::find($id);

        return view('backend.team.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Team::find($id);

        if (!$data) {
            return redirect('team')->with('error', 'Team member not found');
        }
    
        // Handle logo update
        if ($request->hasFile('image')) {
            // Delete the old logo if it exists
            if ($data->image) {
                $oldImagePath = public_path('/images/team/') . $data->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            // Upload the new logo
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();        
                $image->move(public_path('/images/team/'), $imageName);
                $data->image = $imageName;
            }
        }
    
        // Update other fields if necessary
        $data->name = $request->name;
        $data->type = $request->type;
        $data->position = $request->position;
        
        try {
            // Save the updated data
            $data->save();
            return redirect('team')->with('message', 'Team Member updated successfully');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return redirect('team')->with('error', 'Error updating a Member');
        }

    }

    public function delete($id)
    {

        $data = Team::find($id);

        if(!$data)
        {
            return redirect('team')->with('error', 'Member not found');
        }

        // Retrieve the image member path
        $imagePath = public_path('/images/team/') . $data->image;
        try {
            // Delete the data from the database
            $data->delete();

            // Delete the logo file if it exists
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            return redirect('team')->with('message', 'Team Member delete successfully');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return redirect('team')->with('error', 'Error while deleting a member');
        }

    }
}

<?php

namespace App\Http\Controllers\Backend\Client;

use App\Http\Controllers\Controller;
use App\Models\OurClient;
use Illuminate\Http\Request;

class OurClientController extends Controller
{
     public function index()
    {
        $data = OurClient::orderBy('id', 'DESC')->get();;

        return view('backend.ourClient.index', compact('data'));
    }

    public function Create()
    {
        return view('backend.ourClient.create');
    }

    public function Store(Request $request)
    {
        $data = new OurClient();

        $data->website = $request->website;

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time() . '_' . uniqid() . '.' . $logo->getClientOriginalExtension();        
            $logo->move(public_path('/images/logo/'), $logoName);
            $data->logo = $logoName;
        }

        
        $data->save();
        return redirect('our-client')->with('message', 'Client added successfully');

    }

    public function edit($id)
    {
        $data = OurClient::find($id);

        return view('backend.ourClient.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = OurClient::find($id);

        $data->website = $request->website;

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time() . '_' . uniqid() . '.' . $logo->getClientOriginalExtension();        
            $logo->move(public_path('/images/logo/'), $logoName);
            $data->logo = $logoName;
        }

        
        $data->save();
        return redirect('our-client')->with('message', 'Client updated successfully');
    }

    // public function delete($id)
    // {
    //     $data = OurClient::find($id);

    //     $data->delete();
    //     return redirect('our-client')->with('message', 'Client deleted successfully');
    // }

    public function delete($id)
        {
            $data = OurClient::find($id);

            if (!$data) {
                return redirect('our-client')->with('error', 'Client not found');
            }

            // Retrieve the logo path
            $logoPath = public_path('/images/logo/') . $data->logo;

            try {
                // Delete the data from the database
                $data->delete();

                // Delete the logo file if it exists
                if (file_exists($logoPath)) {
                    unlink($logoPath);
                }

                return redirect('our-client')->with('message', 'Client deleted successfully');
            } catch (\Exception $e) {
                // Log the error or handle it as needed
                return redirect('our-client')->with('error', 'Error deleting client');
            }
        }
}

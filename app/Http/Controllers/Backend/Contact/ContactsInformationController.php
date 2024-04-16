<?php

namespace App\Http\Controllers\Backend\Contact;

use App\Http\Controllers\Controller;
use App\Models\ContactInformation;
use Illuminate\Http\Request;

class ContactsInformationController extends Controller
{
    public function index()
    {
        $data = ContactInformation::all();

        return view('backend.contactInformation.index', compact('data'));
    }

   public function Create()
   {
     return view('backend.contactInformation.create');
   }

   public function Store(Request $request)
   {
     $data = new ContactInformation();

     $data->address = $request->address;
     $data->email = $request->email;
     $data->phone = $request->phone;

     $data->save();
     return redirect('contacts')->with('message', 'Contact information added successfully');
   }

   public function edit($id)
   {
    $data = ContactInformation::find($id);

    return view('backend.contactInformation.edit', compact('data'));

   }

   public function update(Request $request, $id)
   {
    $data = ContactInformation::find($id);

    $data->address = $request->address;
    $data->email = $request->email;
    $data->phone = $request->phone;

    $data->save();
    return redirect('contacts')->with('message', 'Contact information updated successfully');
   }

   public function delete($id)
   {
    $data = ContactInformation::find($id);

    $data->delete();

    return redirect('contacts')->with('message', 'Contact deleted successfully');
   }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    

    public function manageContactUs(){
        $data['contactUs'] = Contact::all();
        return view('admin.manage-contactUs', $data);
    }

    public function deleteContact($id){
        $deleteContact = Contact::find($id);
        $deleteContact->delete();
        return redirect('admin/manage-contactUs')->with('success', 'Contact Delete Successfully');
    }
}

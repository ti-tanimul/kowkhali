<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function addService(){
        return view('admin.add-service');
    }
    public function storeService(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,image',
        ]);
        $imageName = '';
        if($image = $request->file('image')){
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/', $imageName);
        }
        Service::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);
        return redirect()->back()->with('success', 'Insert successfully!');
    }

    public function manageService(){
        $data['services'] = Service::all();
        return view('admin.manage-service', $data);
    }
    public function editService($id){
        $data['services'] = Service::find($id);
        return view('admin.edit-service', $data);
    }
    public function updateService(Request $request, $id){

        $content = Service::find($id);
        $request->validate([
            'title'         => 'required',
            'description'   => 'required',
            'image'         => 'nullable|mimes:png,jpg,jpeg,image',
        ]);
        $imageName = '';
        $deleteOldImage = 'images/'.$content->image;
        if($image = $request->file('image')){
            if(file_exists($deleteOldImage)){
                unlink($deleteOldImage);
            }
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images', $imageName);
        }else{
            $imageName = $content->image;
        }
        Service::where('id', $id)->update([
            'title'         => $request->title,
            'description'   => $request->description,
            'image'         => $imageName
        ]);
        return redirect('/admin/manage-service')->with('success', 'Service Update Successfully');
    }

    public function deleteService($id){
        $deleteImage = Service::find($id);
        $deleteImage->delete();
        return redirect('manage-service')->with('success', 'Service Delete Successfully');
    }
}

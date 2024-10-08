<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function addBanner(){
        return view('admin.add-banner');
    }
    public function storeBanner(Request $request){
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
        Banner::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);
        return redirect()->back()->with('success', 'Insert successfully!');
    }
    public function manageBanner(){
        $data['banners'] = Banner::all();
        return view('admin.manage-banner', $data);
    }
    public function editBanner($id){
        $data['banners'] = Banner::find($id);
        return view('admin.edit-banner', $data);  
    }
    public function updateBanner(Request $request, $id){

        $content = Banner::find($id);
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
        Banner::where('id', $id)->update([
            'title'         => $request->title,
            'description'   => $request->description,
            'image'         => $imageName
        ]);
        return redirect('admin/manage-banner')->with('success', 'Banner Update Successfully');
    }
    public function deleteBanner($id){
        $deleteImage = Banner::find($id);
        $deleteImage->delete();
        return redirect('manage-banner')->with('success', 'Banner Delete Successfully');
    }

    public function adminLogout(){
        auth::logout();
        return redirect('/admin-login');
    }
}

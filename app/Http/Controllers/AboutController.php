<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function addAbout(){
        return view('admin.add-about');
    }

    public function storeAbout(Request $request){
        $request->validate([
            'about_description'     => 'required',
            'mission_description'   => 'required',
            'mission_image'         => 'required|mimes:png,jpg,jpeg,image',
            'vission_description'   => 'required',
            'vission_image'         => 'required|mimes:png,jpg,jpeg,image',
        ]);
        
        $missionImageName = '';
        if($missionImage = $request->file('mission_image')){
            $missionImageName = time().'-'.uniqid().'.'.$missionImage->getClientOriginalExtension();
            $missionImage->move('images/', $missionImageName);
        }
        
        $vissionImageName = '';
        if($vissionImage = $request->file('vission_image')){
            $vissionImageName = time().'-'.uniqid().'.'.$vissionImage->getClientOriginalExtension();
            $vissionImage->move('images/', $vissionImageName);
        }
    
        About::create([
            'about_description'     => $request->about_description,
            'mission_description'   => $request->mission_description,
            'mission_image'         => $missionImageName,
            'vission_description'   => $request->vission_description,
            'vission_image'         => $vissionImageName,
        ]);
        
        return redirect()->back()->with('success', 'Insert successfully!');
    }
    public function manageAbout(){
        $data['abouts'] = About::all();
        return view('admin.manage-about', $data);
    }

    public function editAbout($id){
        $data['abouts'] = About::find($id);
        return view('admin.edit-about', $data);  
    }

    public function updateAbout(Request $request, $id)
    {
        $content = About::find($id);
        
        $request->validate([
            'about_description'     => 'required',
            'mission_description'   => 'required',
            'mission_image'         => 'image|mimes:png,jpg,jpeg', 
            'vission_description'   => 'required',
            'vission_image'         => 'image|mimes:png,jpg,jpeg',
        ]);
        
        $missionImageName = $content->mission_image;
        $vissionImageName = $content->vission_image;
        
        if ($request->hasFile('mission_image')) {
            $this->deleteImageIfExists($content->mission_image); // Delete old mission image
            $missionImageName = time().'-'.uniqid().'.'.$request->file('mission_image')->getClientOriginalExtension();
            $request->file('mission_image')->move('images', $missionImageName);
        }
        
        if ($request->hasFile('vission_image')) {
            $this->deleteImageIfExists($content->vission_image); // Delete old vission image
            $vissionImageName = time().'-'.uniqid().'.'.$request->file('vission_image')->getClientOriginalExtension();
            $request->file('vission_image')->move('images', $vissionImageName);
        }
        
        About::where('id', $id)->update([
            'about_description'     => $request->about_description,
            'mission_description'   => $request->mission_description,
            'mission_image'         => $missionImageName,
            'vission_description'   => $request->vission_description,
            'vission_image'         => $vissionImageName,
        ]);
        
        return redirect('/admin/manage-about')->with('success', 'About Updated Successfully');
    }

    private function deleteImageIfExists($imagePath)
    {
        if ($imagePath && file_exists(public_path($imagePath))) {
            unlink(public_path($imagePath));
        }
    }
    
    public function deleteAbout($id){
        $deleteImage = About::find($id);
        $deleteImage->delete();
        return redirect('/admin/manage-about')->with('success', 'About Delete Successfully');
    }
    
}

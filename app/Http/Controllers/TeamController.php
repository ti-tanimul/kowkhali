<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function addTeam(){
        return view('admin.add-team');
    }
    public function storeTeam(Request $request){
        $request->validate([
            'name'          => 'required',
            'designation'   => 'required',
            'image'         => 'required|mimes:png,jpg,jpeg,image',
        ]);
        $imageName = '';
        if($image = $request->file('image')){
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/', $imageName);
        }
        Team::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $imageName,
        ]);
        return redirect()->back()->with('success', 'Insert successfully!');
    }

    public function manageTeam(){
        $data['teams'] = Team::all();
        return view('admin.manage-team', $data);
    }
    public function editTeam($id){
        $data['teams'] = Team::find($id);
        return view('admin.edit-team', $data);
    }
    public function updateTeam(Request $request, $id){

        $content = Team::find($id);
        $request->validate([
            'name'         => 'required',
            'designation'   => 'required',
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
        Team::where('id', $id)->update([
            'name'         => $request->name,
            'designation'   => $request->designation,
            'image'         => $imageName
        ]);
        return redirect('/admin/manage-team')->with('success', 'Team Update Successfully');
    }

    public function deleteTeam($id){
        $deleteImage = Team::find($id);
        $deleteImage->delete();
        return redirect('manage-team')->with('success', 'Team Delete Successfully');
    }
}

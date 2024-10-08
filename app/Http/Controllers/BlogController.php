<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function addBlog(){
        return view('admin.add-blog');
    }
    public function storeBlog(Request $request){
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
        Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);
        return redirect()->back()->with('success', 'Insert successfully!');
    }

    public function manageBlog(){
        $data['blogs'] = Blog::all();
        return view('admin.manage-blog', $data);
    }
    public function editBlog($id){
        $data['blogs'] = Blog::find($id);
        return view('admin.edit-blog', $data);
    }
    public function updateBlog(Request $request, $id){

        $content = Blog::find($id);
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
        Blog::where('id', $id)->update([
            'title'         => $request->title,
            'description'   => $request->description,
            'image'         => $imageName
        ]);
        return redirect('/admin/manage-blog')->with('success', 'Blog Update Successfully');
    }

    public function deleteBlog($id){
        $deleteImage = Blog::find($id);
        $deleteImage->delete();
        return redirect('/admin/manage-blog')->with('success', 'Blog Delete Successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\ContactMail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Banner;
use App\Models\About;
use App\Models\Service;
use App\Models\Team;
use App\Models\Blog;
use App\Models\Number;

// use Illuminate\Support\Facades\Mail;




class HomeController extends Controller
{
    public function index(){
        $data['banners'] = Banner::all();
        $data['abouts'] = About::orderBy('id', 'desc')->first();
        $data['services'] = Service::latest()->take(3)->get();
        $data['blogs'] = Blog::latest()->take(3)->get();
        $data['teams'] = Team::latest()->take(4)->get();
        $data['number'] = Number::orderBy('id', 'desc')->first();
        return view("home", $data);
    }

    public function aboutUs(){
        $data['abouts'] = About::orderBy('id', 'desc')->first();
        return view("aboutUs", $data);
    }

    public function service(){
        $data['services'] = Service::latest()->take(6)->get();
        return view("service", $data);
    }

    public function gallery(){
        $data['abouts'] = About::all();
        $data['services'] = Service::all();
        $data['blogs'] = Blog::all();
        return view("gallery", $data);
    }

    public function blog(){
        $data['blogs'] = Blog::latest()->take(6)->get();
        return view("blog", $data);
    }

    public function contactUs(){
        return view("contactUs");
    }

    public function contactUsStore(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'message' => 'required',
        ]);
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'message' => $request->message,
        ]);

        $name = $request->name;
        $email = $request->email;
        $mobile = $request->mobile;
        $message = $request->message;

        $send_mail = "tanimul.cse@gmail.com";

        Mail::to($send_mail)->send(new ContactMail($name, $mobile, $email, $message));

        return redirect()->back()->with('success', 'Insert completed successfully!');
    }
}

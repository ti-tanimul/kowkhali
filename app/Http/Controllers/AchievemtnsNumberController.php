<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Number;

class AchievemtnsNumberController extends Controller
{
    public function addNumber(){
        $data['numbers'] = Number::orderBy('id', 'desc')->first();
        return view('admin.add-number', $data);
    }

    public function updateNumber(Request $request){
        $request->validate([
            'expereance'    => 'required',
            'volunteer'     => 'required',
            'event'         => 'required',
            'family'        => 'required',
            'person'        => 'required',
            'childreen'     => 'required',
        ]);
    
        $number = Number::find(1); // Replace 1 with the actual ID or a unique identifier
    
        if ($number) {
            $number->update([
                'expereance'    => $request->expereance,
                'volunteer'     => $request->volunteer,
                'event'         => $request->event,
                'family'        => $request->family,
                'person'        => $request->person,
                'childreen'     => $request->childreen,
            ]);
    
            return redirect()->back()->with('success', 'Number Update Successfully');
        } else {
            return redirect()->back()->with('error', 'Number not found');
        }
    }
}

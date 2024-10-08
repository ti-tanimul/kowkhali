<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function addDonation(){
        $data['donation'] = Donation::orderBy('id', 'desc')->first();
        return view('admin.add-donation', $data);
    }

    public function updateDonation(Request $request){
        $request->validate([
            'bkash'     => 'required',
            'nogod'     => 'required',
            'rocket'    => 'required',
            'bank'      => 'required'
        ]);
    
        $donation = Donation::find(1); // Replace 1 with the actual ID or a unique identifier
    
        if ($donation) {
            $donation->update([
                'bkash'     => $request->bkash,
                'nogod'     => $request->nogod,
                'rocket'    => $request->rocket,
                'bank'      => $request->bank,
            ]);
    
            return redirect()->back()->with('success', 'Number Update Successfully');
        } else {
            return redirect()->back()->with('error', 'Number not found');
        }
    }
}

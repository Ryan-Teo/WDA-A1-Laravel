<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;

class InquiryController extends Controller
{
    public function create()
    {
        $inquiry = new Inquiry();
        return view('inquiries.create', ['inquiry' => $inquiry ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'cust_name' => 'required',
            'cust_email' => 'required',
            'service_area' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ]);
        Inquiry::create($request->all());
        return redirect()->route('inquiries.create') ->with('success','Inquiry issued successfully');
    }
}

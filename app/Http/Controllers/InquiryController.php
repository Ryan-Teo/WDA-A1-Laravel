<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;
use App\User;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\InquiryFormRequest;
use Illuminate\Support\Facades\Session;
class InquiryController extends Controller
{
    public function create()
    {
        $names = User::pluck('name', 'id');
        $inquiry = new Inquiry;
        return view('inquiries.create', ['inquiry' => $inquiry ,'names' => $names]);
    }

    public function store(Request $request)
    {
        $inquiry = new Inquiry;
        $inquiry->user_name = $request->user_name;
        $inquiry->user_email = $request->user_email;
        $inquiry->os = $request->os;
        $inquiry->software_issue = $request->software_issue;
        $inquiry->status = $request->status;
        $inquiry->comment = $request->comment;
        $user = User::find($request->user_name);
        $inquiry->user()->associate($user);

        $inquiry->save();

        return redirect()->route('inquiries.show',[$inquiry->id]) ->with('success','Inquiry issued successfully');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $inquiries = Inquiry::orderBy('id','DESC')->paginate(5);
        return view('inquiries.index',compact('inquiries')) ->with('i', ($request->input('page', 1) - 1) * 5);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inquiry = Inquiry::find($id);
        return view('inquiries.show',compact('inquiry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inquiry= Inquiry::find($id);
        return view('inquiries.edit',compact('inquiry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'status' => 'required',
            'comment' => 'max:255|min:5',
        ]);
        Inquiry::find($id)->update($request->all());
        return redirect()->route('inquiries.index') ->with('success','Inquiry updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

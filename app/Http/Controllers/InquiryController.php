<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;
use App\User;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\InquiryFormRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class InquiryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $users = User::all();
        $names = User::pluck('name', 'id');
        $inquiry = new Inquiry;
        return view('inquiries.create', ['inquiry' => $inquiry ,'users' => $users, 'names'=>$names]);
    }

    public function store(InquiryFormRequest $request)
    {

        $this->validate($request, [
            'user_name' => 'required',
            'os' => 'required|max:255',
            'software_issue' => 'required|max:255',
            'status' => 'required'
        ]);

        $inquiry = new Inquiry;
        $user = Auth::user();
        $inquiry->user_name = $user->name;
        $inquiry->user_email = $user->email;
        $inquiry->os = $request->os;
        $inquiry->software_issue = $request->software_issue;
        $inquiry->comment = $request->comment;
        $inquiry->description = $request->description;
        $inquiry->status = $request->status;
        $inquiry->priority = null;
        $inquiry->level = 0;
        $inquiry->esc_requested = false;
        $inquiry->is_closed = false;

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
        $inquiries = Inquiry::orderBy('id')->paginate(5);
        return view('inquiries.index',compact('inquiries')) ->with('i', ($request->input('page', 1) - 1) * 5);

    }


    public function admin(Request $request)
    {
        $inquiries = Inquiry::orderBy('id','DESC')->paginate(5);
        return view('inquiries.admin',compact('inquiries')) ->with('i', ($request->input('page', 1) - 1) * 5);

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
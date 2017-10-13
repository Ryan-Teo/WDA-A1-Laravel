<?php

namespace App\Http\Controllers;

use App\Http\Requests\InquiryFormRequest;
use Illuminate\Http\Request;
use App\Inquiry;
use Illuminate\Validation\Rules\In;

class InquiryCRUDController extends Controller
{
    //get and list all inquiries
    public function index(Request $request)
    {
        $inquiries = Inquiry::all();
        return $inquiries;
    }

    /**
     * Store a newly created inquiry in storage.
     */
    public function store(Request $request)
    {
        try {

            $inquiry = new Inquiry();

            $inquiry->user_name = $request->user_name;
            $inquiry->user_email = $request->user_email;
            $inquiry->os = $request->os;
            $inquiry->software_issue = $request->software_issue;
            $inquiry->comment = $request->comment;
            $inquiry->user_id = $request->user_id;
            $inquiry->description = $request->description;
            $inquiry->status = $request->status;
            $inquiry->priority = $request->priority;
            $inquiry->level = $request->level;

            $saved = $inquiry->save();

            if(!$saved){
                return array("status" => "ERROR");
            }
        }

        catch(Exception $e) {
            return array("status" => "ERROR");
        }

        return array("status" => "SUCCESS");
    }

    /**
     * Display the specified inquiry.
     */
    public function show($id)
    {
        $inquiry= Inquiry::find($id);
        return $inquiry;
    }

    /**
     * Update the specified inquiry in storage.
     *
     */
    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'status' => 'required',
                'comment' => 'max:255|min:5',
            ]);
            $inquiry = Inquiry::find($id);
            $inquiry->comment = $request->comment;
            $inquiry->status = $request->status;

            //including priority and escalation level?

            $saved = $inquiry->save();

            if(!$saved){
                return array("status" => "ERROR");
            }
        }
        catch(Exception $e) {
            return array("status" => "ERROR");
        }

        return array("status" => "SUCCESS");;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $inquiry = Inquiry::find($id);
            if ($inquiry != null) {
                $inquiry->delete();
            } else {
                return array("status" => "ERROR");
            }
        }
        catch(Exception $e) {
            return array("status" => "ERROR");
        }

        return array("status" => "SUCCESS");;
    }

}

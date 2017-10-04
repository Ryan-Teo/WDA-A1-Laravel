<?php

namespace App\Http\Controllers;

use App\Http\Requests\InquiryFormRequest;
use Illuminate\Http\Request;
use App\Inquiry;
use Illuminate\Validation\Rules\In;

class InquiryCRUDController extends Controller
{
    public function index(Request $request)
    {
        $inquiries = Inquiry::all();
        return $inquiries;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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
            $inquiry->description = $request->description;
            $inquiry->status = $request->status;

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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inquiry= Inquiry::find($id);
        return $inquiry;
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
        try {
            $this->validate($request, [
                'status' => 'required',
                'comment' => 'max:255|min:5',
            ]);
            $inquiry = Inquiry::find($id)->update($request->all());

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
<?php

namespace App\Http\Controllers;

use App\Models\Webinar;
use App\Models\WebinarDay;
use App\Models\WebinarSession;
use Illuminate\Http\Request;

class WebinarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index')
            ->withDays(WebinarDay::all())
            ->withSessions(WebinarSession::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     *
     */
    public function store(Request $request)
    {

        $rules = [
            'title'         => 'nullable',
            'first_name'    => 'required',
            'last_name'     => 'required',
            'email'         => 'required|email|unique:webinars',
            'phone'         => 'required|unique:webinars',
            'church_name'   => 'required',
            'day'           => 'required',
            'session'       => 'required',
        ];

        $this->validate($request, $rules);

        $data = $request->all();
        $data['webinar_session_id'] = $request->input('session');
        $data['webinar_day_id'] = $request->input('day');


        $webinar = Webinar::create($data);

        // flash message

//        session()->flash('success', 'Thank you,'. $webinar->first_name.' '.$webinar->last_name.'you  registration is successful');
//
//        return redirect()->route('landing');

        $notification=array(
            'message'=>'Thank you! '. $webinar->first_name.' '.$webinar->last_name.' your  registration is successful. The webinar link has been sent to your email address.',
            'alert-type'=>'success'
        );
        return Redirect()->route('landing')->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

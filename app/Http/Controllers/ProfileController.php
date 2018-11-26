<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Session;
class ProfileController extends Controller
{
  public function __construct()
{
  $this->middleware('auth');
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_user=auth()->user()->id;
          $user=User::all()->where('id',$current_user);
            return view('pages.profile')->withuser($user);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $this->validate($request, array(


        ));
        $profile=User::find($id);
        $profile->firstname = $request->firstname;
        $profile->middlename = $request->middlename;
        $profile->lastname = $request->lastname;
        $profile->email = $request->email;
        $profile->contact = $request->contact;
        $profile->address = $request->address;
        $profile->designation = $request->designation;
        $profile->user_type = $request->user_type;
        $profile->save();
        Session::flash('success','Profile successfully updated!');
        return back();
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

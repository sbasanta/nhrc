<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Guideline;
use Session;
use Auth;
use File;

class GuidelineController extends Controller
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
        $guidelines=Guideline::all();
        return view('pages.guideline.guideline')->with('guideline',$guidelines);
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
        $this->validate($request,array(
          'etitle' => 'required | min:6',
         'published_date' => 'date',
         'file1' => 'required | mimes:pdf,doc,docx',
         'file2' => 'sometimes | mimes:pdf,doc,docx'
        ));

    $guideline=new Guideline();
    $guideline->etitle=$request->etitle;
    $guideline->ntitle=$request->ntitle;
    $guideline->published_date=$request->published_date;
    $guideline->link=$request->link;
     $guideline->addedby=auth()->user()->id;
    $guideline->status=$request->status;



if($request->hasFile('file1'))
       {
       $file1=$request->file('file1');
       $originalname=preg_replace('/\..+$/', '', $file1->getClientOriginalName());
       $filename1=$originalname.time().'.'.$file1->getClientOriginalExtension();
       $location=public_path('uploads/guidelines');
       $file1->move($location,$filename1);

       $guideline->file1 = $filename1;

       }


if($request->hasFile('file2'))
       {
       $file2=$request->file('file2');
       $originalname=preg_replace('/\..+$/', '', $file2->getClientOriginalName());
       $filename=$originalname.time().'.'.$file2->getClientOriginalExtension();
       $location=public_path('uploads/guidelines');
       $file2->move($location,$filename);

       $guideline->file2 = $filename;

       }

    $guideline->save();
    Session::flash('success','New Guideline successfully added');
    return back();

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $g1=Guideline::find($id);
    $filename1=$g1->file1;
    $location1 = public_path('uploads/guidelines/'.$filename1);
    return response()->download($location1);
    }

     public function download($id)
    {
    $g2=Guideline::find($id);
    $filename2=$g2->file2;
    $location = public_path('uploads/guidelines/'.$filename2);
    return response()->download($location);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guideline=Guideline::find($id);
       return view('pages.guideline.editguideline')->withguidelines($guideline);
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
     $this->validate($request,array(
       'etitle' => 'required | min:6',
       'published_date' => 'date',
       'file1' => 'sometimes | mimes:pdf,doc,docx',
       'file2' => 'sometimes | mimes:pdf,doc,docx'
     ));
     $guideline =Guideline::find($id);
     $guideline->etitle = $request->etitle;
     $guideline->ntitle = $request->ntitle;
     $guideline->published_date = $request->published_date;
     $guideline->link = $request->link;
     // $guideline->status=$request->status;
     if($request->hasFile('file1'))
     {
           $file1=$request->file('file1');
           $originalname=preg_replace('/\..+$/', '', $file1->getClientOriginalName());
           $filename1=$originalname.time().'.'.$file1->getClientOriginalExtension();
           $location=public_path('uploads/guidelines');

           $oldfile1=$guideline->file1;
           $oldf1location=public_path('uploads/guidelines/'.$oldfile1);
           if(File::exists($oldf1location))
           {
               $deletef1 = File::delete($oldf1location);
           }

           $file1->move($location,$filename1);
           $guideline->file1 = $filename1;

     }
     if($request->hasFile('file2'))
     {
           $file2=$request->file('file2');
           $originalname2=preg_replace('/\..+$/', '', $file2->getClientOriginalName());
           $filename2= $originalname2.time().'.'.$file2->getClientOriginalExtension();
           $location=public_path('uploads/guidelines');

           $oldfile2=$guideline->file2;
           $oldf2location=public_path('uploads/guidelines/'.$oldfile2);
           if(File::exists($oldf2location))
           {
               $deletef2 = File::delete($oldf2location);
           }

           $file2->move($location,$filename2);
           $guideline->file2 = $filename2;

     }
     $guideline->save();
     Session::flash('success','Guideline update Successfull!');
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
        $guideline=Guideline::find($id);
       $file1=$guideline->file1;
       $file2=$guideline->file2;
       $location1=public_path('uploads/guidelines/'.$file1);
       $location2=public_path('uploads/guidelines/'.$file2);
           $delete1=File::delete($location1);
           $delete2=File::delete($location2);
           $guideline->delete();
           Session::flash('success','Guideline Successfully deleted!');
           return back();
    }
}

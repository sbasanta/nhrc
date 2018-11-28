<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Report;
use Auth;
use File;

use Session;

class ReportController extends Controller
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
  {       $report = Report::all();
    return view('pages.report.report')->withreport($report);
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

    $this->validate($request, array(
      'etitle' => 'required | min:6',

      'published_date' => 'date',

      'file1' => 'required | mimes:pdf,doc,docx',
      'file2' => 'sometimes | mimes:pdf,doc,docx' // validatin part

    ));


    $report = new Report;
    $report->etitle =$request->etitle;
    $report->ntitle =$request->ntitle;
    $report->published_date =$request->published_date;
    $report->link =$request->link;
    $report->addedby = auth()->user()->id;
    $report->status = $request->status;;


    if($request->hasFile('file1'))
    {
      $file1=$request->file('file1');
      $originalname=preg_replace('/\..+$/', '', $file1->getClientOriginalName());
      $filename1=$originalname.time().'.'.$file1->getClientOriginalExtension();
      $location=public_path('uploads/reports');
      $file1->move($location,$filename1);

      $report->file1 = $filename1;

    }
    if($request->hasFile('file2'))
    {
      $file2=$request->file('file2');
      $originalname=preg_replace('/\..+$/', '', $file2->getClientOriginalName());
      $filename=$originalname.time().'.'.$file2->getClientOriginalExtension();
      $location=public_path('uploads/reports');
      $file2->move($location,$filename);

      $report->file2 = $filename;

    }
    $report->save();
    Session::flash('success','Report was successfully added');
    return back();



  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function download($id)
  {
    $dl = Report::find($id);
    $filename1=$dl->file1;
    $location= public_path('uploads/reports/'.$filename1);
    return response()->download($location);
  }
  public function show($id)
  {
    $dl = Report::find($id);
    $filename=$dl->file2;
    $location= public_path('uploads/reports/'.$filename);
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
    $report = Report::find($id);
    return view('pages.report.editreport')->withreport($report);
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
    $report =Report::find($id);
    $report->etitle = $request->etitle;
    $report->ntitle = $request->ntitle;
    $report->published_date = $request->published_date;
    $report->link = $request->link;
    // $book->status=$request->status;
    if($request->hasFile('file1'))
    {
      $file1=$request->file('file1');
      $originalname=preg_replace('/\..+$/', '', $file1->getClientOriginalName());
      $filename1=$originalname.time().'.'.$file1->getClientOriginalExtension();
      $location=public_path('uploads/reports');

      $oldfile1=$report->file1;
      $oldf1location=public_path('uploads/reports/'.$oldfile1);
      if(File::exists($oldf1location))
      {
        $deletef1 = File::delete($oldf1location);
      }

      $file1->move($location,$filename1);
      $report->file1 = $filename1;

    }
    if($request->hasFile('file2'))
    {
      $file2=$request->file('file2');
      $originalname2=preg_replace('/\..+$/', '', $file2->getClientOriginalName());
      $filename2= $originalname2.time().'.'.$file2->getClientOriginalExtension();
      $location=public_path('uploads/reports');

      $oldfile2=$report->file2;
      $oldf2location=public_path('uploads/reports/'.$oldfile2);
      if(File::exists($oldf2location))
      {
        $deletef2 = File::delete($oldf2location);
      }

      $file2->move($location,$filename2);
      $report->file2 = $filename2;

    }
    $report->save();
    Session::flash('success','Report update Successfull!');
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
    $report= Report::find($id);

    $file1= $report->file1;
    $file2= $report->file2;
    $location1 = public_path('uploads/reports/'.$file1);
    $location2 = public_path('uploads/reports/'.$file2);

    $delete1 = File::delete($location1);
    $delete2 = File::delete($location2);

    $report->delete();
    Session::flash('success','Report deleted Successfully!');
    return back();


  }
}

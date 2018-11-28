<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Book;
use Session;
use Auth;
use File;

class BookController extends Controller
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
            //$books=Book::orderBy('id','desc')->paginate(2);
            $books = Book::all();
            $book= Book::all();
            return view('pages.book.book')->withbooks($books)->withbook($book);
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
        $book = new Book();
        $book->etitle = $request->etitle;
        $book->ntitle = $request->ntitle;
        $book->published_date = $request->published_date;
        $book->link = $request->link;
        $book->addedby= auth()->user()->id;
        $book->status=$request->status;
        if($request->hasFile('file1'))
        {
        $file1=$request->file('file1');
        $originalname=preg_replace('/\..+$/', '', $file1->getClientOriginalName());
        $filename1=$originalname.time().'.'.$file1->getClientOriginalExtension();
        $location=public_path('uploads/books');
        $file1->move($location,$filename1);

        $book->file1 = $filename1;

        }
        if($request->hasFile('file2'))
        {
        $file2=$request->file('file2');
        $originalname2=preg_replace('/\..+$/', '', $file2->getClientOriginalName());
        $filename2= $originalname2.time().'.'.$file2->getClientOriginalExtension();
        $location=public_path('uploads/books');
        $file2->move($location,$filename2);
        $book->file2 = $filename2;

        }
        $book->save();
        Session::flash('success','Book has been successfully added!');
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
    $dl= Book::find($id);
    $filename1=$dl->file1;
    $location=public_path('uploads/books/'.$filename1);
    return response()->download($location);

  }
    public function show($id)
    {
      $dl2= Book::find($id);
    $filename2=$dl2->file2;
      $location=public_path('uploads/books/'.$filename2);
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
      $books=Book::find($id);
      return view('pages.book.editbook')->withbook($books);
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
      $book =Book::find($id);
      $book->etitle = $request->etitle;
      $book->ntitle = $request->ntitle;
      $book->published_date = $request->published_date;
      $book->link = $request->link;
      // $book->status=$request->status;
      if($request->hasFile('file1'))
      {
            $file1=$request->file('file1');
            $originalname=preg_replace('/\..+$/', '', $file1->getClientOriginalName());
            $filename1=$originalname.time().'.'.$file1->getClientOriginalExtension();
            $location=public_path('uploads/books');

            $oldfile1=$book->file1;
            $oldf1location=public_path('uploads/books/'.$oldfile1);
            if(File::exists($oldf1location))
            {
                $deletef1 = File::delete($oldf1location);
            }

            $file1->move($location,$filename1);
            $book->file1 = $filename1;

      }
      if($request->hasFile('file2'))
      {
            $file2=$request->file('file2');
            $originalname2=preg_replace('/\..+$/', '', $file2->getClientOriginalName());
            $filename2= $originalname2.time().'.'.$file2->getClientOriginalExtension();
            $location=public_path('uploads/books');

            $oldfile2=$book->file2;
            $oldf2location=public_path('uploads/books/'.$oldfile2);
            if(File::exists($oldf2location))
            {
                $deletef2 = File::delete($oldf2location);
            }

            $file2->move($location,$filename2);
            $book->file2 = $filename2;

      }
      $book->save();
      Session::flash('success','Book update Successfull!');
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
        $book=Book::find($id);
        $file1=$book->file1;
        $file2=$book->file2;
        $location1=public_path('uploads/books/'.$file1);
        $location2=public_path('uploads/books/'.$file2);
            $delete1=File::delete($location1);
            $delete2=File::delete($location2);
            $book->delete();
            Session::flash('success','Book Successfully deleted!');
            return back();
    }
}

@extends('main')

@section('title', '| Book')
@section('breadcrumb')
  <li class="breadcrumb-item active" aria-current="page">Publication</li>
  <li class="breadcrumb-item active" aria-current="page">Book</li>
@endsection
@section('content')


  <button type="button" class="btn btn-secondary bg-official mb-3" data-toggle="modal" data-target="#addbook">
    Add New Book
  </button>

  <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
    <thead>
      <tr>
        <th>Upload Date</th>
        <th>Title</th>

        <th>Action</th>
        @if(Auth::user()->user_type=='SuperAdmin' || Auth::user()->user_type=='Admin' )
          <th></th>
        @endif
      </tr>
    </thead>
    <tbody>
      @foreach($books as $books)
        <tr>
          <td>{{date('j M Y', strtotime($books->created_at))}}</td>
          <td> {{$books->etitle}} | {{$books->ntitle}} ({{date('M Y', strtotime($books->published_date))}})</td>

          <td>

            <a href="{{ url('publication/book/d',$books->id) }}" class="btn work btn-outline-success btn-sm mb-1" target="_blank">Download File1</a>

            @if ($books->file2 !== null)
              <a href="{{ url('publication/book',$books->id) }}" class="btn work btn-outline-success btn-sm mb-1" target="_blank">Download File2</a>
            @else

            @endif
          </td>

          @if(Auth::user()->user_type=='SuperAdmin' || Auth::user()->user_type=='Admin' )

            <td>

              {{--
              <a href="" data-toggle="modal" data-target="#edit{{$books->id}}"  class="btn btn-sm btn-info">Edit</a> --}}

              <a href="{{route('book.edit',$books->id)}}">  <button class="btn btn-sm "  data-toggle="tooltip" data-placement="top" title="Edit Book"><img src="{{asset('images/icon/edit.png')}}" style="height:20px;"></button></a>
              {{-- <a href="#" class="btn btn-warning " id="editbutton" data-etitle="{{$books->etitle}}" data-ntitle="{{$books->ntitle}}" data-published_date="{{$books->published_date}}" data-link="{{$books->link}}" data-file1="{{$books->file1}}" data-id="{{$books->id}}" data-file2="{{$books->file2}}"  >Edit</a> --}}
              <form action="{{ route('book.destroy', $books->id) }}" method="post" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete??')">
                {{ csrf_field() }}
                @method('delete')
                <button type="submit" class="btn btn-sm "  data-toggle="tooltip" data-placement="top" title="Delete Book"><img src="{{asset('images/icon/rubbish.png')}}" style="height:20px;"></button>
              </form>
            </td>
          @endif
        </tr>
      @endforeach

    </tfoot>
  </table>
  {{-- {!! $books->render(); !!} --}}



  <div class="modal fade bd-example-modal-lg" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Modal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" id="editbookform" action="" enctype="multipart/form-data" data-parsley-validate>
            {{ csrf_field() }}
            @method('put')
            <div class="form-group">
              <label for="etitle">English Title</label>
              <input type="text" class="form-control" id="etitle" placeholder="Book title in English" name="etitle" required minlength="5" >
            </div>
            <div class="form-group">
              <label for="title">Nepali Title</label>
              <input type="text" class="form-control" id="ntitle" placeholder="Book title in Nepali" name="ntitle" required minlength="5" maxlength="200" height="20">
            </div>
            <div class="form-group row">
              <div class="col-md-4">
                <label for="title">Published Date</label>
                <input type="date" class="form-control" id="published_date" placeholder="Published date" name="published_date" >
              </div>
              <div class="col-md-8">
                <label for="title">Link/URL</label>
                <input type="text" class="form-control" id="link" placeholder="Any external links" name="link">
              </div>
            </div>


            <div class="form-group row">
              <div class="col-md-1">
                <label for="file-to-upload" class="col-form-label"> File1 </label>
              </div>
              <div class="col-md-11">
                <input type="file" class="form-control" id="file1" name="file1" placeholder="file to upload">
                <input type="text" id="hiddenforfile1" disabled>
                {{-- {{$editbook->file1}} --}}

              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-1">
                <label for="file-to-upload" class="col-form-label"> File2 </label>
              </div>
              <div class="col-md-11">
                <input type="file" class="form-control" id="file2" name="file2" placeholder="file to upload" >
                <input type="text" id="hiddenforfile2" disabled>
                {{-- {{$editbook->file2}} --}}
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <input type="reset"  class="btn btn-warning btn-md">
            <input type="submit" value="Add" class="btn btn-primary btn-md">
          </div>	</form>
        </div>
      </div>
    </div>


    <!-- Modal for adding new book-->
    <div class="modal fade bd-example-modal-lg" id="addbook" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">New Book</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <form method="POST" action="{{route('book.store')}}" enctype="multipart/form-data" data-parsley-validate> {{csrf_field()}}
              <div>

                <div class="form-group row">
                  <div class="col-md-2">
                    <label for="english_title" class="col-form-label"> Title </label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="etitle" name="etitle" placeholder="Title in English" required minlength="6">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2">
                    <label for="nepalititle" class="col-form-label">Title (शीर्षक) </label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="ntitle" name="ntitle" placeholder="Title in Nepali" minlength="6">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2">
                    <label for="published_date" class="col-form-label"> Published Date </label>
                  </div>
                  <div class="col-md-10">
                    <input type="date" class="form-control" id="published_date" name="published_date" required/>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2">
                    <label for="link" class="col-form-label">Link/URL</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="link" name="link" placeholder="External link" data-parsley-type="url">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2">
                    <label for="file-to-upload" class="col-form-label"> File1 </label>
                  </div>
                  <div class="col-md-10">
                    <input type="file" class="form-control" id="file1" name="file1" placeholder="file to upload" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-2">
                    <label for="file-to-upload" class="col-form-label"> File2 </label>
                  </div>
                  <div class="col-md-10">
                    <input type="file" class="form-control" id="file2" name="file2" placeholder="file to upload">
                  </div>
                </div>
                <input type="hidden" name="status" value="1">

              </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <input type="reset"  class="btn btn-warning btn-md">
              <input type="submit" value="Add" class="btn btn-primary btn-md">
            </div>	</form>
          </div>
        </div>
      </div>

    

@endsection

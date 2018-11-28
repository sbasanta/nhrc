@extends('edit')

@section('breadcrumb')
  <li class="breadcrumb-item active" aria-current="page"><a href="#">Publication</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="{{url('publication/book')}}">Book</a></li>
  <li class="breadcrumb-item active" aria-current="page">Edit</li>

  {{-- <li class="breadcrumb-item active" aria-current="page">{{$book->etitle}}</li> --}}


@endsection
@section('content-edit')
  <div class="row justify-content-center">

    <div class="col-md-8 " style="margin-top:5px;">
      <form method="POST" action="{{route('book.update',$book->id)}}" enctype="multipart/form-data" data-parsley-validate>
        {{csrf_field()}}
        @method('put')
        <!-- <fieldset style=" display: block; border: 1px groove;"> -->
        <fieldset class="border border-info rounded">
          <legend class="col-md-4"> Edit Book Details </legend>

          <div class="card" style="background:#FFFFE0;box-shadow:0px 1px 3px gray;padding:20px;">

            <div class="form-group row">
              <div class="col-md-2 offset-md-1">
                <label for="english_title" class="col-form-label"> Title </label>
              </div>
              <div class="col-md-8">
                <textarea  class="form-control" id="etitle" name="etitle"  placeholder="Title in English" required minlength="6"> {{$book->etitle}} </textarea>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-2 offset-md-1">
                <label for="nepalititle" class="col-form-label">Title (शीर्षक) </label>
              </div>
              <div class="col-md-8">
                <textarea  class="form-control" id="ntitle" name="ntitle"  placeholder="Title in English" required minlength="6"> {{$book->ntitle}} </textarea>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-2 offset-md-1">
                <label for="published_date" class="col-form-label"> Published Date </label>
              </div>
              <div class="col-md-8">
                <input type="date"class="form-control" id="published_date" name="published_date" value="{{$book->published_date}}" required/>
              </div>
            </div>


            <div class="form-group row">
              <div class="col-md-2 offset-md-1">
                <label for="link" class="col-form-label">Link/URL</label>
              </div>
              <div class="col-md-8">
                <input type="text" class="form-control" id="link" name="link"  value="{{$book->link}}" placeholder="External link" data-parsley-type="url">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-2 offset-md-1">
                <label for="file-to-upload" class="col-form-label"> File1 </label>
              </div>
              <div class="col-md-8">
                <input type="file" class="form-control" id="file1" name="file1" placeholder="file to upload">
               <small id="file1help" class="form-text text-muted">  {{$book->file1}}</small>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-2 offset-md-1">
                <label for="file-to-upload" class="col-form-label"> File2 </label>
              </div>
              <div class="col-md-8">
                <input type="file" class="form-control" id="file2" name="file2" placeholder="file to upload">
                <small id="file2help" class="form-text text-muted">  {{$book->file2}}</small>


              </div>
            </div>
            <input type="hidden" name="status" id="status" value="1">

              <div class=" row offset-md-8">

                <input type="reset"  class="btn btn-secondary btn-md mr-3">

                <input type="submit" value="Update" class="btn btn-success btn-md">
              </div>

          </div>
        </fieldset>
      </form>
    </div>
    <div class="col-md-3" >
      <fieldset class="border border-info rounded">
        <legend class="col-md-5">Details</legend>


        <div class="card-body" style="background:#FFFFE0;box-shadow:0px 1px 3px gray;padding:10px;">
          <table class=" table-sm borderless small" style="border:0px;">
    <tr><td>Uploaded by:</td><td>{{$book->user->firstname}} {{$book->user->lastname}}</td></tr>
      <tr><td>Upload date:</td><td>{{date('j M Y', strtotime($book->created_at))}}</td></tr>
      <tr><td>Last Updated:</td><td>{{date('j M Y h : i a' , strtotime($book->updated_at))}}</td></tr>
    </table>
        </div>
      </div>



    </div>
  </div>
@endsection

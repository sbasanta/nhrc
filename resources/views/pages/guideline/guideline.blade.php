@extends('main')

@section('title', '| Guideline')
@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Publication</li>
      <li class="breadcrumb-item active" aria-current="page">Guideline</li>
@endsection
@section('content')

      <button type="button" class="btn btn-secondary bg-official mb-3" data-toggle="modal" data-target="#guideline">
Add New Guideline
</button>

      <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
        <thead>
          <tr >
            <th>Upload Date</th>
            <th>Title</th>
            <th>Action</th>

            @if(Auth::user()->user_type=='SuperAdmin' || Auth::user()->user_type=='Admin' )
              <th></th>
            @endif
          </tr>
        </thead>
        <tbody>
          @foreach($guideline as $guidelines)
          <tr>
            <td>{{date('j M Y', strtotime($guidelines->created_at))}}</td>
            <td>{{$guidelines->etitle}} | {{$guidelines->ntitle}} ({{date('M Y', strtotime($guidelines->published_date))}})</td>


            <td><a href="{{route('guideline.show',$guidelines->id)}}" class="btn btn-outline-success  btn-sm mb-1">Download File1</a>

               @if($guidelines->file2 !== null)

            <a href="{{url('publication/guideline/d',$guidelines->id)}}" class="btn btn-outline-success  btn-sm">Download File2</a></td>
            @endif
            @if(Auth::user()->user_type=='SuperAdmin' || Auth::user()->user_type=='Admin' )

            <td>
                <a href="{{route('guideline.edit',$guidelines->id)}}">  <button class="btn btn-sm "  data-toggle="tooltip" data-placement="top" title="Edit Guideline"><img src="{{asset('images/icon/edit.png')}}" style="height:20px;"></button></a>


                <form action="{{ route('guideline.destroy', $guidelines->id) }}" method="post" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete??')">
                  {{ csrf_field() }}
                  @method('delete')
                  <button type="submit" class="btn btn-sm "  data-toggle="tooltip" data-placement="top" title="Delete Guideline"><img src="{{asset('images/icon/rubbish.png')}}" style="height:20px;"></button>
                </form>
            </td>
          @endif
          </tr>
          @endforeach
        </tbody>

        </tfoot>
      </table>



<!-- Modal to add new guideline-->
<div class="modal fade bd-example-modal-lg" id="guideline" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">New Guideline</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


<form action="{{route('guideline.store')}}" method="post" enctype="multipart/form-data" data-parsley-validate>
  {{csrf_field()}}
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
  <input type="text" class="form-control" id="nepalititle" name="ntitle" placeholder="Title in Nepali" minlength="6">
</div>
</div>

<div class="form-group row">
  <div class="col-md-2">
  <label for="published_date" class="col-form-label"> Published Date </label>
</div>
  <div class="col-md-10">
  <input type="date"class="form-control" id="published_date" name="published_date" required/>
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
<input type="hidden" name="status" id="status" value="1">
<div class="modal-footer">

<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
<input type="reset"  class="btn btn-warning btn-md">
<input type="submit" value="Add" class="btn btn-primary btn-md">
</div>
</div>	</form>

    </div>
  </div>
</div>
</div>


@endsection

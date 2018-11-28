@include('partials/inc_header')
@include('partials.inc_message')
<form method="POST" action="{{route('guideline.update',$guidelines->id)}}" enctype="multipart/form-data" data-parsley-validate>
  {{csrf_field()}}
  @method('put')


<div>
<div class="form-group row">
<div class="col-md-2">
  <label for="english_title" class="col-form-label"> Title </label>
</div>
<div class="col-md-10">
  <input type="text" class="form-control" id="etitle" name="etitle" value= "{{$guidelines->etitle}}" placeholder="Title in English" required minlength="6">
</div>
</div>

<div class="form-group row">
<div class="col-md-2">
  <label for="nepalititle" class="col-form-label">Title (शीर्षक) </label>
</div>
<div class="col-md-10">
  <input type="text" class="form-control" id="ntitle" name="ntitle" value="{{$guidelines->ntitle}}" placeholder="Title in Nepali" minlength="6">
</div>
</div>

<div class="form-group row">
  <div class="col-md-2">
  <label for="published_date" class="col-form-label"> Published Date </label>
</div>
  <div class="col-md-10">
  <input type="date"class="form-control" id="published_date" name="published_date" value="{{$guidelines->published_date}}" required/>
  </div>
</div>

<div class="form-group row">
  <div class="col-md-2">
  <label for="link" class="col-form-label">Link/URL</label>
</div>
  <div class="col-md-10">
    <input type="text" class="form-control" id="link" name="link"  value="{{$guidelines->link}}" placeholder="External link" data-parsley-type="url">
  </div>
</div>

<div class="form-group row">
  <div class="col-md-2">
  <label for="file-to-upload" class="col-form-label"> File1 </label>
</div>
  <div class="col-md-10">
    <input type="file" class="form-control" id="file1" name="file1" placeholder="file to upload">
    {{$guidelines->file1}}
  </div>
</div>
<div class="form-group row">
  <div class="col-md-2">
  <label for="file-to-upload" class="col-form-label"> File2 </label>
</div>
  <div class="col-md-10">
    <input type="file" class="form-control" id="file2" name="file2" placeholder="file to upload">
    {{$guidelines->file2}}
  </div>
</div>
<input type="hidden" name="status" id="status" value="1">
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
<input type="reset"  class="btn btn-warning btn-md">
<input type="submit" value="Add" class="btn btn-primary btn-md">
</div>    
</form>
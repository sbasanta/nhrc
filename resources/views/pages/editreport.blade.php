@include('partials/inc_header')

@include('partials.inc_message')
@include('partials.inc_navbar')
@include('partials.inc_breadcrumb')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item"><a href="/">Home</a></li>
@endsection



<div class="row">
  <div class="col-md-1"></div>
<div class="col-md-8" style="margin-top:5px;">
<form method="POST" action="{{route('report.update',$report->id)}}" enctype="multipart/form-data" data-parsley-validate>
  {{csrf_field()}}
  @method('put')
  <!-- <fieldset style=" display: block; border: 1px groove;"> -->
  <fieldset class="border border-info rounded">
    <legend class="col-md-3"> Edit Details </legend>

<div>

<div class="form-group row">
<div class="col-md-2 offset-md-1">
  <label for="english_title" class="col-form-label"> Title </label>
</div>
<div class="col-md-8">
  <textarea  class="form-control" id="etitle" name="etitle"  placeholder="Title in English" required minlength="6"> {{$report->etitle}} </textarea>
</div>
</div>

<div class="form-group row">
<div class="col-md-2 offset-md-1">
  <label for="nepalititle" class="col-form-label">Title (शीर्षक) </label>
</div>
<div class="col-md-8">
    <textarea  class="form-control" id="ntitle" name="ntitle"  placeholder="Title in English" required minlength="6"> {{$report->ntitle}} </textarea>
</div>
</div>

<div class="form-group row">
  <div class="col-md-2 offset-md-1">
  <label for="published_date" class="col-form-label"> Published Date </label>
</div>
  <div class="col-md-8">
  <input type="date"class="form-control" id="published_date" name="published_date" value="{{$report->published_date}}" required/>
  </div>
</div>


<div class="form-group row">
  <div class="col-md-2 offset-md-1">
  <label for="link" class="col-form-label">Link/URL</label>
</div>
  <div class="col-md-8">
    <input type="text" class="form-control" id="link" name="link"  value="{{$report->link}}" placeholder="External link" data-parsley-type="url">
  </div>
</div>

<div class="form-group row">
  <div class="col-md-2 offset-md-1">
  <label for="file-to-upload" class="col-form-label"> File1 </label>
</div>
  <div class="col-md-8">
    <input type="file" class="form-control" id="file1" name="file1" placeholder="file to upload">
    <div class="mt-1">  {{$report->file1}} </div>
  </div>
</div>
<div class="form-group row">
  <div class="col-md-2 offset-md-1">
  <label for="file-to-upload" class="col-form-label"> File2 </label>
</div>
  <div class="col-md-8">
    <input type="file" class="form-control" id="file2" name="file2" placeholder="file to upload">
    <div class="mt-1">
    {{$report->file2}}
  </div>
  </div>
</div>
<input type="hidden" name="status" id="status" value="1">
<div class="form-group row">
<div class=" col-md-2 offset-md-1">

<input type="reset"  class="btn btn-warning btn-lg">
</div>
<div class="">
<input type="submit" value="Update" class="btn btn-primary btn-lg">
</div>
</div>
</div>
</fieldset>
</form>
</div>
<div class="col-md-2" style="margin-top:100px;">
<div class="card bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header">Created At</div>
  <div class="card-body">

    <p class="card-text">{{date('j M Y', strtotime($report->created_at))}}</p>
  </div>
</div>


<div class="card bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header">Last Updated</div>
  <div class="card-body">
    <p class="card-text">{{date('j M Y', strtotime($report->updated_at))}}</p>
  </div>
</div>
</div>
</div>

@include('partials.inc_footernav')
@include('partials.inc_footer')

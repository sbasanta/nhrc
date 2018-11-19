@extends('main')

@section('title', '| Speech')
@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Publication</li>
      <li class="breadcrumb-item active" aria-current="page">Speech</li>
@endsection
@section('content')


      <button type="button" class="btn btn-danger mb-3" data-toggle="modal" data-target="#pressrelease">
Add New Speech
</button>

      <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
        <thead>
          <tr >
            <th>Upload Date</th>
            <th>Title</th>

            <th>Download</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2075-06-22</td>
            <td> 	आयोगका मा.अध्यक्षले अन्तर्राष्ट्रिय सम्मेलनको प्रतिवेदन सार्वजनिक समारोहमा दिनुभएको मन्तब्य</td>

            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
          </tr>
          <tr>
            <td>2075-06-22</td>
            <td> 	वेपत्तापारिएका व्यक्तिको छानबिन,सत्यनिरुपण तथा मेलमलिापआयोग ऐनसंशोधन विधेयक माथिआयोगकाे राय</td>

            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
          </tr>
          <tr>
            <td>2075-06-22</td>
            <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>

            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
          </tr>
          <tr>
            <td>2075-06-22</td>
            <td> 	महिला मानवअधिकार रक्षकहरुको राष्ट्रियसञ्जाल आयोजित कार्यक्रममा आयोगका मा.अध्यक्षकाे मन्तब्य</td>

            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
          </tr>
          <tr>
            <td>2075-06-22</td>
            <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>

            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
          </tr>
          <tr>
            <td>2075-06-22</td>
            <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>

            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
          </tr>
          <tr>
            <td>2075-06-22</td>
            <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>

            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
          </tr>
          <tr>
            <td>2075-06-22</td>
            <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>

            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
          </tr>
          <tr>
            <td>2075-06-22</td>
            <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>

            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
          </tr>
          <tr>
            <td>2075-06-22</td>
            <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>

            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
          </tr>
          <tr>
            <td>2075-06-22</td>
            <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>

            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
          </tr>
          <tr>
            <td>2075-06-22</td>
            <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>

            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
          </tr>
          <tr>
            <td>2075-06-22</td>
            <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>

            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
          </tr>
          <tr>
            <td>2075-06-22</td>
            <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>

            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
          </tr>
          <tr>
            <td>2075-06-22</td>
            <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>

            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
          </tr>
          <tr>
            <td>2075-06-22</td>
            <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>

            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
          </tr>
          <tr>
            <td>2075-06-22</td>
            <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>

            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
          </tr>

        </tfoot>
      </table>


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="pressrelease" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">New Speech</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="" action="" enctype="multipart/form-data" data-parsley-validate>
        <div>

        <div class="form-group row">
        <div class="col-md-2">
          <label for="english_title" class="col-form-label"> Title </label>
        </div>
        <div class="col-md-10">
          <input type="text" class="form-control" id="s_englishtitle" name="s_englishtitle" placeholder="Title in English" required minlength="6">
        </div>
        </div>

        <div class="form-group row">
        <div class="col-md-2">
          <label for="nepalititle" class="col-form-label">Title (शीर्षक) </label>
        </div>
        <div class="col-md-10">
          <input type="text" class="form-control" id="s_nepalititle" name="s_nepalititle" placeholder="Title in Nepali" minlength="6">
        </div>
        </div>

        <div class="form-group row">
          <div class="col-md-2">
          <label for="published_date" class="col-form-label"> Published Date </label>
        </div>
          <div class="col-md-10">
          <input type="date"class="form-control" id="s_publishdate" name="s_publishdate" required/>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-md-2">
          <label for="link" class="col-form-label">Link/URL</label>
        </div>
          <div class="col-md-10">
            <input type="text" class="form-control" id="s_link" name="s_link" placeholder="External link" data-parsley-type="url">
          </div>
        </div>

        <div class="form-group row">
          <div class="col-md-2">
          <label for="file-to-upload" class="col-form-label"> File1 </label>
        </div>
          <div class="col-md-10">
            <input type="file" class="form-control" id="s_file1" name="s_file1" placeholder="file to upload" required>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-2">
          <label for="file-to-upload" class="col-form-label"> File2 </label>
        </div>
          <div class="col-md-10">
            <input type="file" class="form-control" id="s_file2" name="s_file2" placeholder="file to upload">
          </div>
        </div>

        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="reset"  class="btn btn-warning btn-md">
        <input type="submit" value="Add" class="btn btn-primary btn-md">
        </div>	</form>

    </div>
  </div>
</div>

@endsection

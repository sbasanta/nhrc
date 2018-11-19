@extends('main')

@section('title', '| Report')

@section('content')

  <button type="button" class="btn btn-danger mb-3" data-toggle="modal" data-target="#report">
Add New Report
</button>

        <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
          <thead>
            <tr >
              <th>Upload Date</th>
              <th>File Name</th>
              <th>Year</th>
              <th>Category</th>
              <th>Download</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>2071</td>
              <td>Annual Report</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
            </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>2071</td>
              <td>Annual Report</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
            </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>2071</td>
              <td>Annual Report</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
            </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>2071</td>
              <td>Annual Report</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
            </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>2071</td>
              <td>Annual Report</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
            </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>2071</td>
              <td>Annual Report</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
            </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>2071</td>
              <td>Annual Report</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
            </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>2071</td>
              <td>Annual Report</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
            </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>2071</td>
              <td>Annual Report</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
            </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>2071</td>
              <td>Annual Report</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
            </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>2071</td>
              <td>Annual Report</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
            </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>2071</td>
              <td>Annual Report</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
            </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>2071</td>
              <td>Annual Report</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
            </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>2071</td>
              <td>Annual Report</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
            </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>2071</td>
              <td>Annual Report</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
            </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>2071</td>
              <td>Annual Report</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
            </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>2071</td>
              <td>Annual Report</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
            </tr>

          </tfoot>
        </table>

        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="report" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">New Report</h5>
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
                  <input type="text" class="form-control" id="r_englishtitle" name="r_englishtitle" placeholder="Title in English" required minlength="6">
                </div>
                </div>

                <div class="form-group row">
                <div class="col-md-2">
                  <label for="nepalititle" class="col-form-label">Title (शीर्षक) </label>
                </div>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="r_nepalititle" name="r_nepalititle" placeholder="Title in Nepali" minlength="6">
                </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2">
                  <label for="published_date" class="col-form-label"> Published Date </label>
                </div>
                  <div class="col-md-10">
                  <input type="date"class="form-control" id="r_publishdate" name="r_publishdate" required/>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2">
                  <label for="link" class="col-form-label">Link/URL</label>
                </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="r_link" name="r_link" placeholder="External link" data-parsley-type="url">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2">
                  <label for="file-to-upload" class="col-form-label"> File1 </label>
                </div>
                  <div class="col-md-10">
                    <input type="file" class="form-control" id="r_file1" name="r_file1" placeholder="file to upload" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-2">
                  <label for="file-to-upload" class="col-form-label"> File2 </label>
                </div>
                  <div class="col-md-10">
                    <input type="file" class="form-control" id="r_file2" name="r_file2" placeholder="file to upload">
                  </div>
                </div>

                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <input type="reset"  class="btn btn-warning btn-md">
                <input type="submit" value="Add" class="btn btn-primary btn-md">
                </div>	</form>

            </div>
          </div>
        </div>
        </div>
  @endsection

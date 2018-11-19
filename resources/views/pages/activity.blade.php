@extends('profile')
@section('title', ' | Activity')

@section('profile-content')

  <div class="row">
    <div class="col-md-12">

      <button type="button" class="btn btn-danger col-md-2 mb-3 mt-3 ml-3" data-toggle="modal" data-target="#pressrelease">
        Add New
      </button>

      <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
        <thead>
          <tr >
            <th>Upload Date</th>
            <th>Title</th>
            <th>Category</th>
            <th>Download</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2075-06-22</td>
            <td> 	आयोगका मा.अध्यक्षले अन्तर्राष्ट्रिय सम्मेलनको प्रतिवेदन सार्वजनिक समारोहमा दिनुभएको मन्तब्य</td>
            <td>Notice</td>
            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
            <td><button class="btn btn-outline-info btn-sm mr-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Edit</small></button><button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Delete</small></button></td>

          </tr>
          <tr>
            <td>2075-06-22</td>
            <td> 	वेपत्तापारिएका व्यक्तिको छानबिन,सत्यनिरुपण तथा मेलमलिापआयोग ऐनसंशोधन विधेयक माथिआयोगकाे राय</td>
            <td>Notice</td>
            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>

            <td><button class="btn btn-outline-info btn-sm mr-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Edit</small></button><button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Delete</small></button></td>

          </tr>
          <tr>
            <td>2075-06-22</td>
            <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
            <td>Notice</td>

            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
            <td><button class="btn btn-outline-info btn-sm mr-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Edit</small></button><button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Delete</small></button></td>

          </tr>
          <tr>
            <td>2075-06-22</td>
            <td> 	महिला मानवअधिकार रक्षकहरुको राष्ट्रियसञ्जाल आयोजित कार्यक्रममा आयोगका मा.अध्यक्षकाे मन्तब्य</td>
            <td>Report</td>
            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
            <td><button class="btn btn-outline-info btn-sm mr-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Edit</small></button><button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Delete</small></button></td>

          </tr>
          <tr>
            <td>2075-06-22</td>
            <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
            <td>Press Release</td>
            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
            <td><button class="btn btn-outline-info btn-sm mr-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Edit</small></button><button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Delete</small></button></td>

          </tr>
          <tr>
            <td>2075-06-22</td>
            <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
            <td>Report</td>
            <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
          <td><button class="btn btn-outline-info btn-sm mr-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Edit</small></button><button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Delete</small></button></td>             </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>Book</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
              <td><button class="btn btn-outline-info btn-sm mr-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Edit</small></button><button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Delete</small></button></td>
            </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>Radio Program</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
              <td><button class="btn btn-outline-info btn-sm mr-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Edit</small></button><button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Delete</small></button></td>

            </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>Notice</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
              <td><button class="btn btn-outline-info btn-sm mr-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Edit</small></button><button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Delete</small></button></td>

            </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>Press Release</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
              <td><button class="btn btn-outline-info btn-sm mr-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Edit</small></button><button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Delete</small></button></td>

            </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>Notice</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
              <td><button class="btn btn-outline-info btn-sm mr-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Edit</small></button><button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Delete</small></button></td>
            </tr>
            <tr>
              <td>2075-06-22</td>
              <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
              <td>Notice</td>
              <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
              <td><button class="btn btn-outline-info btn-sm mr-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Edit</small></button><button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Delete</small></button></td>  </tr>
              <tr>
                <td>2075-06-22</td>
                <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
                <td>Notice</td>
                <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
                <td><button class="btn btn-outline-info btn-sm mr-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Edit</small></button><button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Delete</small></button></td>
              </tr>
              <tr>
                <td>2075-06-22</td>
                <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
                <td>Notice</td>
                <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
                <td><button class="btn btn-outline-info btn-sm mr-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Edit</small></button><button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Delete</small></button></td>        </tr>
                <tr>
                  <td>2075-06-22</td>
                  <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
                  <td>Notice</td>
                  <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
                  <td><button class="btn btn-outline-info btn-sm mr-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Edit</small></button><button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Delete</small></button></td>            </tr>
                  <tr>
                    <td>2075-06-22</td>
                    <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
                    <td></td>
                    <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
                    <td><button class="btn btn-outline-info btn-sm mr-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Edit</small></button><button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Delete</small></button></td>      </tr>
                    <tr>
                      <td>2075-06-22</td>
                      <td>Monitoring Report of the House of Representative and State Assembly Election, 2017</td>
                      <td></td>
                      <td><button class="btn btn-outline-success  btn-sm">Download</button></td>
                      <td><button class="btn btn-outline-info btn-sm mr-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Edit</small></button><button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><small>Delete</small></button></td>       </tr>

                    </tfoot>
                  </table>


                </div>

              </div>


        <div class="modal fade bd-example-modal-lg" id="pressrelease" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add New</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form>
                  <div>

                    <div class="form-group row">
                      <div class="col-md-2">
                        <label for="english_title" class="col-form-label"> Title </label>
                      </div>
                      <div class="col-md-10">
                        <input type="text" class="form-control" id="pr_englishtitle" name="pr_englishtitle" placeholder="Title in English">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-2">
                        <label for="nepalititle" class="col-form-label">Title (शीर्षक) </label>
                      </div>
                      <div class="col-md-10">
                        <input type="text" class="form-control" id="pr_nepalititle" name="pr_nepalititle" placeholder="Title in Nepali">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-2">
                        <label for="published_date" class="col-form-label"> Published Date </label>
                      </div>
                      <div class="col-md-10">
                        <input type="text" id="nepaliDate2" class="nepali-calendar form-control" value="2069-08-18"/>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-2">
                        <label for="link" class="col-form-label">Link/URL</label>
                      </div>
                      <div class="col-md-10">
                        <input type="text" class="form-control" id="pr_link" name="pr_link" placeholder="External link">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-2">
                        <label for="file-to-upload" class="col-form-label"> File </label>
                      </div>
                      <div class="col-md-10">
                        <input type="file" class="form-control" id="pr_file" name="pr_file" placeholder="file to upload">
                      </div>
                    </div>
                    <div class="form-group row">

                      <div class="col-md-1"> </div>
                      <div class="col-md-11">



                      </div>
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
@endsection

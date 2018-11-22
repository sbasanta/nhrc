@extends('main')

@section('title', '| Gallery | Photo')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
    <li class="breadcrumb-item active" aria-current="page">Photo</li>
@endsection

@section('content')

      <button type="button" class="btn btn-danger mb-3" data-toggle="modal" data-target="#pressrelease">
Add New Album
</button>


        <div class="gallerydiv">
            <div class="row">
          <div class="card mr-3 mb-3" style="width: 13rem;">
            <img class="card-img-top" src="{{url('images/album1.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">International Conference on Addressing Impunity and Realizing Human Rights in South Asia (Inaugural Ceremony</h6>
              <p class="small">Posted On: 2018-06-18</p>
              <div class="row justify-content-md-center ">
              <a href="#" class="btn btn-outline-primary btn-sm " >View Album</a>
            </div>
            </div>
          </div>
          <div class="card mr-3 mb-3" style="width: 13rem;">
            <img class="card-img-top" src="{{url('images/album3.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Local Level Election 2074 Monitoring Report Submission by NHRC to Election Commission </h6>
              <p class="small">Posted On: 2018-06-22</p>
              <div class="row justify-content-md-center ">
              <a href="#" class="btn btn-outline-primary btn-sm " >View Album</a>
            </div>
            </div>
          </div>
          <div class="card mr-3 mb-3" style="width: 13rem;">
            <img class="card-img-top" src="{{url('images/album2.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Signing Ceremony of Activation Plan of NepalNHRC & QatarNHRC MoU on Migration</h6>
              <p class="small">Posted On: 2018-06-18</p>
              <div class="row justify-content-md-center ">
              <a href="#" class="btn btn-outline-primary btn-sm " >View Album</a>
            </div>
            </div>
          </div>
          <div class="card mr-3 mb-3" style="width: 13rem;">
            <img class="card-img-top" src="{{url('images/album4.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Memorandum submitted to NHRC by Civil Society regarding death of four children </h6>
              <p class="small">Posted On: 2018-06-18</p>
              <div class="row justify-content-md-center ">
              <a href="#" class="btn btn-outline-primary btn-sm " >View Album</a>
            </div>
            </div>
          </div>
          <div class="card mr-3 mb-3" style="width: 13rem;">
            <img class="card-img-top" src="{{url('images/album5.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">NHRC Bangladesh Official Visit to Nepal</h6>
              <p class="small">Posted On: 2018-06-18</p>
              <div class="row justify-content-md-center ">
              <a href="#" class="btn btn-outline-primary btn-sm " >View Album</a>
            </div>
            </div>
          </div>
        </div>
      </div>



<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="pressrelease" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">New Press Release</h5>
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

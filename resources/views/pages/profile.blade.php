@extends('profile')
@section('title', ' | Profile')
@section('profile-content')

    <div class="row">
    <div class="col-md-9">
            <div class="card">
              <div class="card-header ">
                <h5 class="title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>Employee Id (disabled)</label>
                        <input type="text" class="form-control" placeholder="Company" value="25012" disabled>
                      </div>
                    </div>
                    <div class="col-md-6 px-md-1">
                      <div class="form-group">
                        <label>UserId (disabled)</label>
                        <input type="text" class="form-control" placeholder="Username" value="001" disabled>
                      </div>
                    </div>

                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="Company" value="Ram">
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" value="Shrestha">
                      </div>
                    </div>
                  </div>
                  <div class="row">

                    <div class="col-md-7 pr-md-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Last Name" value="ramshrestha@gmail.com">
                      </div>
                    </div>
                    <div class="col-md-5 pl-md-1 ">
                      <div class="form-group">
                        <label>Contact</label>
                        <input type="text" class="form-control" placeholder="Company" value="9849123456">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="Home Address" value="Harirbhawan, Pulchowk, Lalitpur">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 pr-md-1">
                      <div class="form-group">
                        <label>Gender (disabled)</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                           <option>Male</option>
                           <option>Female</option>
                           </select>
                      </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label>User Type (disabled)</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                           <option>Admin</option>
                           <option>Moderator</option>
                           <option>User</option>
                           </select>
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Job Title / Post</label>
                        <input type="text" class="form-control" placeholder="Job Title / Post">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About </label>
                        <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Do not be scared of the truth because we need to restart the human foundation in truth </textarea>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-fill btn-primary">Save</button>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-user">
              <div class="card-body">
                <p class="card-text">
                  <div class="author">
                    <center>
                    <div class="block block-one"></div>
                    <div class="block block-two"></div>
                    <div class="block block-three"></div>
                    <div class="block block-four"></div>
                    <a href="javascript:void(0)">
                      <img class="avatar" src="images/default-avatar.png" alt="..." style="height:110px;width:110px;border-radius:100%;box-shadow:0.5px 1px 3px black;">
                      <h5 class="title">Ram Shrestha</h5>
                    </a>
                    <p class="description">
                      IT Specialist
                    </p>
                  </center>
                </div>
                </p>
                <center>
                <div class="card-description">
                  Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                </div>
              </center>
              </div>
              <div class="card-footer">
                <div class="button-container">
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                    <i class="fab fa-facebook"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                    <i class="fab fa-twitter"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                    <i class="fab fa-google-plus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

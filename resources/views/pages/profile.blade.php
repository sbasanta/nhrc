@extends('profile')
@section('title', ' | Profile')
@section('profile-content')

    <div class="row">
    <div class="col-md-9">
            <div class="card">

                          <div class="card-header">
                            <strong>Edit Profile</strong>
                          </div>
              @foreach($user as $user)
  <div class="card-body">
                <form action="{{route('profile.update',$user->id)}}" method="POST" data-parsley-validate>
                  {{ csrf_field() }}
                  @method('put')
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>UserId </label>
                        <input type="text" class="form-control" placeholder="Username" value="{{$user->id}}" disabled>
                      </div>
                    </div>
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>Employee Id</label>
                        <input type="text" class="form-control" placeholder="Employee ID" value="{{$user->employeeid}}" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="First Name" value="{{$user->firstname}}" name="firstname" required>
                      </div>
                    </div>
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" placeholder="Middle Name" value="{{$user->middlename}}" name="middlename">
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" value="{{$user->lastname}}" name="lastname">
                      </div>
                    </div>
                  </div>
                  <div class="row">

                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" value="{{$user->email}}" name="email">
                      </div>
                    </div>

                  </div>
                  <div class="row">
                    <div class="col-md-5 pr-md-1 ">
                      <div class="form-group">
                        <label>Contact</label>
                        <input type="text" class="form-control" placeholder="Mobile Number" value="{{$user->contact}}" name="contact">
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="Home Address" value="{{$user->address}}" name='address'>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 pr-md-1">
                      <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="gender">
                          <option value="{{$user->gender}}" name="gender">{{$user->gender}}</option>
                           <option>Male</option>
                           <option>Female</option>
                           </select>
                      </div>
                    </div>

                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Designation / Job Title</label>
                        <input type="text" class="form-control" placeholder="Job Designation / Post" value="{{$user->designation}}" name="designation">
                      </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label>User Type </label>
                        <select class="form-control" id="exampleFormControlSelect1" name="user_type" >
                          <option value="{{$user->user_type}}">{{$user->user_type}}</option>
                          <option value="SuperAdmin">SuperAdmin</option>
                           <option value="Admin">Admin</option>
                           <option value="Moderator">Moderator</option>
                           </select>
                      </div>
                    </div>
                  </div>


              </div>
              <div class="card-footer">
                <input type="submit" value="Save" class="btn btn-fill btn-primary">
              </div>
            </div>  </form>
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

                      <img class="avatar" src="{{asset('images/default-avatar.png')}}" alt="..." style="height:110px;width:110px;border-radius:100%;box-shadow:0.5px 1px 3px black;">
                      <h5 class="title">{{$user->firstname}} {{$user->middlename}} {{$user->lastname}}</h5>


                    <p class="description">
                      {{$user->designation}}
                    </p>

                  </center>
                </div>
                </p>

              </div>
              <div class="card-footer text-md-center">
                  <kbd>{{$user->user_type}}</kbd>
              </div>
            </div>
          </div>
        </div>
@endforeach
@endsection

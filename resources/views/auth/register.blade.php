
@extends('profile')
@section('title', ' | Register')

@section('profile-content')
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card" style="box-shadow:0px 1px 2px gray;">
              {{-- <div class="card-header"><img src="{{asset('images/bannerneww.png')}}" class="img-responsive col-md-12" style="background:white;"></div> --}}

            <div class="card-header">
              <strong>Register New User</strong>
            </div>
                <div class="card-body" >
                  <form method="POST" action="{{ route('register') }}" data-parsley-validate>
            @csrf


            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name" >{{ __('Username') }}</label>


                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus>

                @if ($errors->has('username'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('username') }}</strong>
                  </span>
                @endif

              </div>
              <div class="form-group col-md-6">
                <label for="name" >{{ __('Employee Id') }}</label>


                <input id="employeeid" type="text" class="form-control{{ $errors->has('employeeid') ? ' is-invalid' : '' }}" name="employeeid" value="{{ old('employeeid') }}" placeholder="Employee Id" autofocus>

                @if ($errors->has('employeeid'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('employeeid') }}</strong>
                  </span>
                @endif

              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="firstname" >{{ __('Firstname') }}</label>


                <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" placeholder="First name" required autofocus>

                @if ($errors->has('firstname'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('firstname') }}</strong>
                  </span>
                @endif

              </div>

              <div class="form-group col-md-4">
                <label for="middlename" >{{ __('Middlename') }}</label>


                <input id="middlename" type="text" class="form-control{{ $errors->has('middlename') ? ' is-invalid' : '' }}" name="middlename" value="{{ old('middlename') }}" placeholder="Middlename" autofocus>

                @if ($errors->has('middlename'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('middlename') }}</strong>
                  </span>
                @endif

              </div>
              <div class="form-group col-md-4">
                <label for="lastname" >{{ __('Lastname') }}</label>


                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" placeholder="Last name" required>

                @if ($errors->has('lastname'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('lastname') }}</strong>
                  </span>
                @endif

              </div>
            </div>
            <div class="form-row">

              <div class="form-group col-md-12">
                <label for="email" >{{ __('E-Mail Address') }}</label>


                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="abc@example.com" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif

              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="contact" >{{ __('Contact') }}</label>


                <input id="contact" type="number" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" name="contact" value="{{ old('contact') }}" placeholder="Mobile Number" data-parsley-type="number" required autofocus>

                @if ($errors->has('contact'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('contact') }}</strong>
                  </span>
                @endif

              </div>
              <div class="form-group col-md-7">
                <label for="Address" >{{ __('Address') }}</label>


                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" placeholder="Current Address" value="{{ old('address') }}" required>

                @if ($errors->has('address'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('address') }}</strong>
                  </span>
                @endif

              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="gender" >{{ __('Gender') }}</label>

                <select id="gender" class="form-control" name="gender" required>
                  <option value="Male" selected>Male</option>
                  <option value="Female">Female</option>
                  <option value="Others" >Other</option>

                </select>

                @if ($errors->has('gender'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('gender') }}</strong>
                  </span>
                @endif

              </div>
              <div class="form-group col-md-5">
                <label for="designation" >{{ __('Designation') }}</label>


                <input id="designation" type="text" class="form-control{{ $errors->has('designation') ? ' is-invalid' : '' }}" name="designation" placeholder="Employee Post/Designation" value="{{ old('designation') }}" >

                @if ($errors->has('designation'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('designation') }}</strong>
                  </span>
                @endif

              </div>
              <div class="form-group col-md-4">
                <label for="user_type" >{{ __('User Type') }}</label>

                <select id="user_type" class="form-control" name="user_type" required>
                  <option value="SuperAdmin">SuperAdmin</option>
                  <option value="Admin">Admin</option>
                  <option value="Moderator" selected>Moderator</option>
                  <option value="User" selected>User</option>

                </select>

                @if ($errors->has('user_type'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('user_type') }}</strong>
                  </span>
                @endif

              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="contact" >{{ __('Password') }}</label>


                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif

              </div>
              <div class="form-group col-md-6">
                <label for="Address" >{{ __('Confirm Password') }}</label>

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Same Password" required>
                <input type="hidden" name="status" value="1">
                {{-- @if ($errors->has('address'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('address') }}</strong>
                  </span>
                @endif --}}

              </div>
            </div>


            <div class="form-group row mb-0 mt-3">
              <div class="col-md-6 offset-md-5">
                <button type="submit" class="btn btn-primary">
                  {{ __('Register') }}
                </button>
              </div>
            </div>
          </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Session;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    public function __construct()
    {
    $this->middleware('auth');
    }
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:5|confirmed',
            'employeeid' => 'max:255|unique:users',
            'contact' => 'required|min:6|unique:users|max:255',
            'firstname' => 'required|string|min:2|max:200',
            'middlename' => 'sometimes|max:100',
            'lastname' => 'required|string|min:2|max:200 ',
            'contact' => 'min:5|max:50',
            'address' => 'min:4|max:250',
            'designation' => 'min:3|max:255',
            'status' => 'required'

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
          Session()->flash('success', 'User successfully registered.');

        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'employeeid' => $data['employeeid'],
            'firstname' => $data['firstname'],
            'middlename' => $data['middlename'],
            'lastname' => $data['lastname'],
            'contact' => $data['contact'],
            'address' => $data['address'],
            'gender' => $data['gender'],
            'designation' => $data['designation'],
            'user_type' => $data['user_type'],
            'status' => $data['status'],


// Session::flash('success','User Created');


        ]);
    }
    public function register(Request $request)
   {
       $this->validator($request->all())->validate();

       event(new Registered($user = $this->create($request->all())));

       // $this->guard()->login($user);

       return $this->registered($request, $user)
                       ?: redirect()->back();
   }
}

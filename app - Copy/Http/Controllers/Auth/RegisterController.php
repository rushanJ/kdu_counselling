<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Counsellor;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
       
        return view('admin/user');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $user = User::find($user->id);
        $counsellor = new Counsellor;



        $user = User::find($user->id);
        // dd($user);
        $counsellor = new Counsellor;

        $counsellor->f_name =  $data['f_name'];
        $counsellor->m_name =  $data['m_name'];
        $counsellor->l_name = $data['l_name'];
        $counsellor->address =  $data['address'];
        $counsellor->emp_no_student_no =  $data['emp_no_student_no'];
        $counsellor->faculty =  $data['faculty'];
        $counsellor->batch = $data['batch'];
        $counsellor->gender =  $data['gender'];
        $counsellor->phone =  $data['phone'];
        $counsellor->type =  "STUDENT";
        $counsellor->department = $data['department'];
        $counsellor->nic =  $data['nic'];
        $user->user_info()->save($counsellor);

        // dd($user->user_info);
        return $user;
        
    }
}

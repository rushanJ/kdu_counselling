<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Counsellor;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class CounsellorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Counsellor::where('user_id',Auth::user()->id)->get();;
        $users = Counsellor::where(['type' => "COUNSELLER"])
        ->get();  
       
        // dd($user);
        if ($user[0]->type=='STUDENT') return view('/counsellors',compact('users'));
        else return view('admin/counsellor/all',compact('users'));
    }

    public function new()
    {
        
        return view('admin/counsellor/create');
    }

    public function view($id)
    {
        $user = User::find($id);
        return view('admin/counsellor/view',compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin/counsellor/edit',compact('user'));
    }



    public function create(CreateUserRequest $data)
    {
        // dd( $request["email"]);  //  


        try {
            $user= User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
    
            // $user = User::find($user->id);
            // $counsellor = new Counsellor;
    
    
    
            $user = User::find($user->id);
            // dd($user);
            $counsellor = new Counsellor;
    
            $counsellor->f_name =  $data['f_name'];
            $counsellor->m_name =  $data['m_name'];
            $counsellor->l_name = $data['l_name'];
            $counsellor->address =  $data['address'];
            $counsellor->emp_no_student_no =  $data['emp_no_student_no'];
            $counsellor->faculty =  $data['faculty'];
            $counsellor->batch = "";
            $counsellor->gender =  $data['gender'];
            $counsellor->phone =  $data['phone'];
            $counsellor->type =  "COUNSELLER";
            $counsellor->department = $data['department'];
            $counsellor->nic =  $data['nic'];
            $user->user_info()->save($counsellor);
            // dd($user->user_info);
          } catch (\Exception $e) {
            //   return $e->getMessage();
          }

          return redirect('user');

        
    }
    public function update($id,CreateUserRequest $data)
    {
        // dd($data['nic']);  //  


        try {
            // $user= User::create([
            //     'name' => $data['name'],
            //     'email' => $data['email'],
            //     'password' => Hash::make($data['password']),
            // ]);
    
            // $user = User::find($user->id);
            // $counsellor = new Counsellor;
    
    
    
            $user = User::find($id);
            // dd($user);
            $counsellor = $user->user_info();
    
            $counsellor->f_name =  $data['f_name'];
            $counsellor->m_name =  $data['m_name'];
            $counsellor->l_name = $data['l_name'];
            $counsellor->address =  $data['address'];
            $counsellor->emp_no_student_no =  $data['emp_no_student_no'];
            $counsellor->faculty =  $data['faculty'];
            $counsellor->batch = "";
            $counsellor->gender =  $data['gender'];
            $counsellor->phone =  $data['phone'];
            $counsellor->type =  "COUNSELLER";
            $counsellor->department = $data['department'];
            $counsellor->nic =  $data['nic'];

            $counsellor->save($counsellor);
            // $counsellor->save();    
            dd($counsellor['nic']);  //  
         
             // dd($counsellor['nic']);  // 
            // dd($user->user_info);
          } catch (\Exception $e) {
              return $e->getMessage();
          }

        //   return redirect('user/edit/'.$id);
        // return view('admin/counsellor/edit',compact('user'));

        
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->user_info()->delete();
        $user = User::find($id)->delete();
    //    
        $users = Counsellor::where(['type' => "COUNSELLER"])
        ->get();  
       
        // dd($user);
        return redirect('user');
        return view('admin/counsellor/all',compact('users'));
    }
    
}

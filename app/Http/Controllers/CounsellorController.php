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
        $userInfo = Counsellor::where('user_id',$user->id)->first();;
        // dd($userInfo);
        return view('admin/counsellor/edit',compact('user','userInfo'));
    }



    public function create(CreateUserRequest $data)
    {
       
        $path = $data->image->store('images','public');      
       
            $name=$data['f_name']." ".$data['m_name']." ".$data['l_name'];
            
        try {
            $user= User::create([
                'name' =>  $name,
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
            $counsellor->dob =  $data['dob']||'';
            $counsellor->emp_no_student_no =  $data['emp_no_student_no'];
            $counsellor->faculty =  $data['faculty'];
            $counsellor->batch = "";
            $counsellor->gender =  $data['gender'];
            $counsellor->phone =  $data['phone'];
            $counsellor->type =  "COUNSELLER";
            $counsellor->department = $data['department'];
            $counsellor->nic =  $data['nic'];
            $counsellor->description =  $data['description'];
            $counsellor->image =  $path;
            $user->user_info()->save($counsellor);
            // dd($user->user_info);
          } catch (\Exception $e) {
              return $e->getMessage();
          }

        //   dd( $path);  //  
          return redirect('user');

        
    }
    public function update($id,CreateUserRequest $data)
    {
        


        try {
           
    
            $user = User::find($id);
           
            $counsellor = Counsellor::firstWhere('user_id',$user->id);
            // dd($counsellor);
            $counsellor->f_name =  $data['f_name'] ;
            $counsellor->m_name =  $data['m_name'] ;
            $counsellor->l_name = $data['l_name'] ;
            $counsellor->address =  $data['address'];
            $counsellor->emp_no_student_no =  $data['emp_no_student_no'] ;
            $counsellor->faculty =  $data['faculty'];
            $counsellor->batch = "";
            $counsellor->gender =  $data['gender'] ;
            $counsellor->phone =  $data['phone'] ;
            $counsellor->type =  "COUNSELLER";
            $counsellor->department = $data['department']  ;
            $counsellor->nic =  $data['nic']  ;
            $counsellor->description =  $data['description'];

            $counsellor->save();
            // $counsellor->save();    
            // dd($counsellor['nic']);  //  
         
             // dd($counsellor['nic']);  // 
            // dd($user->user_info);
          } catch (\Exception $e) {
              return $e->getMessage();
          }

          return redirect('user/edit/'.$id);
        // return view('admin/counsellor/edit',compact('user'));

        
    }

    public function delete($id)
    {
        // dd("dfsdf");
     
        $user = User::find($id);
        $user->user_info()->delete();
        $user = User::find($id)->delete();
    //    
        $users = Counsellor::where(['type' => "COUNSELLER"])
        ->get();  
       
        // dd($user);
        // return redirect('user');
        return back();
        return view('admin/counsellor/all',compact('users'));
    }
    
}

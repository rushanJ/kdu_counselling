<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Counsellor;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
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
        $users = Counsellor::where(['type' => "STUDENT"])
        ->get();  
       
        // dd($user);
        return view('admin/student/all',compact('users'));
    }

    public function new()
    {
        
        return view('admin/student/create');
    }

    public function view($id)
    {
        $user = User::find($id);
        return view('admin/student/view',compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin/student/edit',compact('user'));
    }



    public function create(CreateUserRequest $data)
    {
      

        $name=$data['f_name']." ".$data['m_name']." ".$data['l_name'];

        try {
            $user= User::create([
                'name' => $name,
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
            $counsellor->address =  $data['address'] ;
            $counsellor->dob =  $data['dob'];
            $counsellor->emp_no_student_no =  $data['emp_no_student_no'];
            $counsellor->faculty =  $data['faculty'];
            $counsellor->batch = "";
            $counsellor->gender =  $data['gender'];
            $counsellor->phone =  $data['phone'];
            $counsellor->type =  "STUDENT";
            $counsellor->department = $data['department'];
            $counsellor->nic =  $data['nic'];
            $counsellor->image =  '';
            $user->user_info()->save($counsellor);
            // dd($user->user_info);
          } catch (\Exception $e) {
              return $e->getMessage();
          }

        

        //   dd( $path);  //  
          return redirect('student');








        // try {
        //     $user= User::create([
        //         'name' => $data['name'],
        //         'email' => $data['email'],
        //         'password' => Hash::make($data['password']),
        //     ]);
    
        //     // $user = User::find($user->id);
        //     // $student = new Counsellor;
    
    
    
        //     $user = User::find($user->id);
        //     // dd($user);
        //     $student = new Counsellor;
    
        //     $student->f_name =  $data['f_name'];
        //     $student->m_name =  $data['m_name'];
        //     $student->l_name = $data['l_name'];
        //     $student->address =  $data['address'];
        //     $counsellor->dob =  $data['dob']||'';
        //     $student->emp_no_student_no =  $data['emp_no_student_no'];
        //     $student->faculty =  $data['faculty'];
        //     $student->batch = $data['batch'];
        //     $student->gender =  $data['gender'];
        //     $student->phone =  $data['phone'];
        //     $student->type =  "STUDENT";
        //     $student->department = $data['department'];
        //     $student->nic =  $data['nic'];
        //     $user->user_info()->save($student);
        //     // dd($user->user_info);
        //   } catch (\Exception $e) {
        //       return $e->getMessage();
        //   }

      
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
            // $student = new Counsellor;
    
    
    
            $user = User::find($id);
            // dd($user);
            // $student = $user->user_info();
            $student = Counsellor::firstWhere('user_id',$user->id);
    
            $student->f_name =  $data['f_name'];
            $student->l_name = $data['l_name'];
            $student->address =  $data['address'];
            $student->emp_no_student_no =  $data['emp_no_student_no'];
            $student->faculty =  $data['faculty'];
            $student->batch = $data['batch'];
            $student->gender =  $data['gender'];
            $student->phone =  $data['phone'];
            $student->type =  "STUDENT";
            $student->department = $data['department'];
            $student->nic =  $data['nic'];

            // $student->save($student);
            $student->save();    
            // dd($student['nic']);  //  
         
             // dd($student['nic']);  // 
            // dd($user->user_info);
          } catch (\Exception $e) {
              return $e->getMessage();
          }

          return redirect('student/edit/'.$id);
        // return view('admin/student/edit',compact('user'));

        
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->user_info()->delete();
        $user = User::find($id)->delete();
    //    
        $users = Counsellor::where(['type' => "STUDENT"])
        ->get();  
       
        // dd($user);
        return view('admin/student/all',compact('users'));
    }
    
}

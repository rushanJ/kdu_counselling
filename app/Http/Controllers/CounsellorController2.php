<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CounsellorController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = Counsellor::where(['type' => "STUDENT"])
        ->get();  
       
        // dd($user);
        return view('admin/counsellor/all',compact('users'));
    }
    public function view()
    {
        dd("dsdsfsdfd");
        $users = Counsellor::where(['user_id' => "STUDENT"])
        ->get();  
       
        // dd($user);
        return view('admin/counsellor/all',compact('users'));
    }


    public function new()
    {
        $user = User::find(1);
        $counsellor = new Counsellor;

        $counsellor->f_name = 'name';
        $counsellor->m_name = 'name';
        $counsellor->l_name = 'name';
        $counsellor->address = 'name';
        $counsellor->emp_no_student_no = 'name';
        $counsellor->faculty = 'name';
        $counsellor->batch = 'name';
        $counsellor->gender = 'name';
        $counsellor->phone = 'name';
        $counsellor->type = 'name';
        $counsellor->department = 'name';
        $counsellor->nic = '09261234567';
        $user->user_info()->save($counsellor);

        dd($user->user_info);
        return view('admin/counsellor');
    }
}

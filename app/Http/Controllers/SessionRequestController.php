<?php

namespace App\Http\Controllers;

use App\Models\Session_Request;
use Illuminate\Http\Request;
use App\Models\Student_Request;
use App\Models\Counsellor;
use Illuminate\Support\Facades\Auth;


class SessionRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $userId=Auth::user()->id;
        // dd($userId );
        $user = Counsellor::where('user_id',Auth::user()->id)->get();;
        if ( $user[0]->type=="STUDENT"){
            $session_requests = \DB::select("SELECT `session__requests`.`id`,CONCAT(`counsellors`.`f_name`,' ',`counsellors`.`l_name`) AS `student_name`,`users`.`name`AS `counsellor_name`, `session__requests`.`problem_type`,`session__requests`. `service_method`, `session__requests`.`remarks` FROM `session__requests`,`users`,`counsellors` WHERE `session__requests`.`student_id`=`counsellors`.`user_id` AND `session__requests`.`counseller_id`=`users`.`id` AND `session__requests`.`student_id`=$userId;");
            // dd($questions );
            return view('mysessions',compact('session_requests'));
        }
        else {
        $session_requests = \DB::select("SELECT `session__requests`.`id`,CONCAT(`counsellors`.`f_name`,' ',`counsellors`.`l_name`) AS `student_name`,`users`.`name`AS `counsellor_name`, `session__requests`.`problem_type`,`session__requests`. `service_method`, `session__requests`.`remarks` FROM `session__requests`,`users`,`counsellors` WHERE `session__requests`.`student_id`=`counsellors`.`id` AND `session__requests`.`counseller_id`=`users`.`id`;");
        // dd($questions );
        return view('admin/sessions/all',compact('session_requests'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student_Request  $session_Request
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $student_request = \DB::select("SELECT `student__requests`.`id`, `questions`.`question`, `student__requests`. `answer`FROM `student__requests`,`questions` WHERE `student__requests`.`question_id`=`questions`.`id` AND `student__requests`.`request_id`=$id ;");
        $session_request = \DB::select("SELECT `session__requests`.`id`,CONCAT(`counsellors`.`f_name`,' ',`counsellors`.`l_name`) AS `student_name`,`users`.`name`AS `counsellor_name`,`session__requests`.`problem_type`, `session__requests`.`counseller_id`,`session__requests`. `service_method`, `session__requests`.`remarks` FROM `session__requests`,`users`,`counsellors` WHERE `session__requests`.`student_id`=`counsellors`.`user_id` AND `session__requests`.`counseller_id`=`users`.`id` AND `session__requests`.`id`=$id ;");
        $users = Counsellor::where(['type' => "COUNSELLER"])
        ->get();  
       
        $session_request=$session_request[0];
       
        $user = Counsellor::where('user_id',Auth::user()->id)->get();;
        if ( $user[0]->type=="STUDENT") return view('service_info_from_counsellor',compact('student_request','session_request','users'));
        // dd($student_request->answers );
        else return view('admin/sessions/view',compact('student_request','session_request','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Session_Request  $session_Request
     * @return \Illuminate\Http\Response
     */
    public function edit(Session_Request $session_Request)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Session_Request  $session_Request
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, Session_Request $session_Request)
    {
        //
  
        
        $session_request = Session_Request::find($id);
        // dd($session_request);
        $session_request->counseller_id =$request['counsellor'];
        $session_request->problem_type =$request['problem_type'];
                        //
        $session_request->save(); 
        return redirect()->back();

 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Session_Request  $session_Request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Session_Request $session_Request)
    {
        //
    }
}

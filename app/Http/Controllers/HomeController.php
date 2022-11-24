<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Counsellor;
use DB;
class HomeController extends Controller
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
    
// return view('counseller/dashboard');
        Session::put('role', $user[0]->type);
        if ($user[0]->type=='STUDENT') return redirect('');
       
        else {

            $today=date('y:m:d');
            $requestChart_anexiety=[];
            $requestChart_depression=[];
            $requestChart_relationship=[];
            $requestChart_educational=[];
  
            //if already have time  then use this  =============
            $oneWeekBefore= date('Y-m-d', strtotime($today. ' - 7 days')); 
            $twoWeekBefore= date('Y-m-d', strtotime($today. ' - 14 days'));
            $threeWeekBefore= date('Y-m-d', strtotime($today. ' - 21 days'));
            $fourWeekBefore= date('Y-m-d', strtotime($today. ' - 28 days'));

            
            $counsellor_count = Counsellor::where('type',"COUNSELLER")->count();
            $student_count = Counsellor::where('type',"STUDENT")->count();
            // $student_count = Counsellor::where('type',"STUDENT")->count();
            $session__requests_count_last_week = DB::table('session__requests')
                                                ->select("*")
                                                ->whereBetween('created_at', [$oneWeekBefore, $today])
                                            
                                                ->count();
            $session__requests_count_all_time = DB::table('session__requests')
                                                    ->select("*")
                                                    ->count();    
            
                                                    
            $anexietyCount = DB::table('session__requests')
                ->select("*")
                ->where('problem_type', "ANXIETY")       
                ->whereBetween('created_at', [$oneWeekBefore, $today])       
                ->count();
            array_push($requestChart_anexiety,$anexietyCount);
            
            $anexietyCount = DB::table('session__requests')
                ->select("*")
                ->where('problem_type', "ANXIETY")       
                ->whereBetween('created_at', [$twoWeekBefore, $oneWeekBefore])       
                ->count();
            array_push($requestChart_anexiety,$anexietyCount);
            $anexietyCount = DB::table('session__requests')
                ->select("*")
                ->where('problem_type', "ANXIETY")       
                ->whereBetween('created_at', [$threeWeekBefore, $twoWeekBefore])       
                ->count();
            array_push($requestChart_anexiety,$anexietyCount);
            $anexietyCount = DB::table('session__requests')
                ->select("*")
                ->where('problem_type', "ANXIETY")       
                ->whereBetween('created_at', [$fourWeekBefore, $threeWeekBefore])       
                ->count();
            array_push($requestChart_anexiety,$anexietyCount);
            $requestChart_anexiety="[".implode(",", $requestChart_anexiety)."]";

            #####################################################################################

            $anexietyCount = DB::table('session__requests')
                ->select("*")
                ->where('problem_type', "DEPRESSION")       
                ->whereBetween('created_at', [$oneWeekBefore, $today])       
                ->count();
            array_push($requestChart_depression,$anexietyCount);
            
            $anexietyCount = DB::table('session__requests')
                ->select("*")
                ->where('problem_type', "DEPRESSION")       
                ->whereBetween('created_at', [$twoWeekBefore, $oneWeekBefore])       
                ->count();
            array_push($requestChart_depression,$anexietyCount);
            $anexietyCount = DB::table('session__requests')
                ->select("*")
                ->where('problem_type', "DEPRESSION")       
                ->whereBetween('created_at', [$threeWeekBefore, $twoWeekBefore])       
                ->count();
            array_push($requestChart_depression,$anexietyCount);
            $anexietyCount = DB::table('session__requests')
                ->select("*")
                ->where('problem_type', "DEPRESSION")       
                ->whereBetween('created_at', [$fourWeekBefore, $threeWeekBefore])       
                ->count();
            array_push($requestChart_depression,$anexietyCount);
            $requestChart_depression="[".implode(",", $requestChart_depression)."]";






            ##########################################################################
            
            $anexietyCount = DB::table('session__requests')
            ->select("*")
            ->where('problem_type', "RELATIONSHIP")       
            ->whereBetween('created_at', [$oneWeekBefore, $today])       
            ->count();
        array_push($requestChart_relationship,$anexietyCount);
        
        $anexietyCount = DB::table('session__requests')
            ->select("*")
            ->where('problem_type', "RELATIONSHIP")       
            ->whereBetween('created_at', [$twoWeekBefore, $oneWeekBefore])       
            ->count();
        array_push($requestChart_relationship,$anexietyCount);
        $anexietyCount = DB::table('session__requests')
            ->select("*")
            ->where('problem_type', "RELATIONSHIP")       
            ->whereBetween('created_at', [$threeWeekBefore, $twoWeekBefore])       
            ->count();
        array_push($requestChart_relationship,$anexietyCount);
        $anexietyCount = DB::table('session__requests')
            ->select("*")
            ->where('problem_type', "RELATIONSHIP")       
            ->whereBetween('created_at', [$fourWeekBefore, $threeWeekBefore])       
            ->count();
        array_push($requestChart_relationship,$anexietyCount);
        $requestChart_relationship="[".implode(",", $requestChart_relationship)."]";









        #########################################################################################################################################
        $anexietyCount = DB::table('session__requests')
            ->select("*")
            ->where('problem_type', "EDUCATIONAL")       
            ->whereBetween('created_at', [$oneWeekBefore, $today])       
            ->count();
        array_push($requestChart_educational,$anexietyCount);
        
        $anexietyCount = DB::table('session__requests')
            ->select("*")
            ->where('problem_type', "EDUCATIONAL")       
            ->whereBetween('created_at', [$twoWeekBefore, $oneWeekBefore])       
            ->count();
        array_push($requestChart_educational,$anexietyCount);
        $anexietyCount = DB::table('session__requests')
            ->select("*")
            ->where('problem_type', "EDUCATIONAL")       
            ->whereBetween('created_at', [$threeWeekBefore, $twoWeekBefore])       
            ->count();
        array_push($requestChart_educational,$anexietyCount);
        $anexietyCount = DB::table('session__requests')
            ->select("*")
            ->where('problem_type', "EDUCATIONAL")       
            ->whereBetween('created_at', [$fourWeekBefore, $threeWeekBefore])       
            ->count();
        array_push($requestChart_educational,$anexietyCount);
        $requestChart_educational="[".implode(",", $requestChart_educational)."]";
            // dd($requestChart_educational);
            
            
            
            
            return view('admin/dashboard',compact('counsellor_count','student_count','session__requests_count_last_week','session__requests_count_all_time','requestChart_anexiety','requestChart_educational','requestChart_relationship','requestChart_depression'));
            // return view('admin/dashboard');}
        }
    }
}

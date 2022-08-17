<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Counsellor;
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
       
        else return view('admin/dashboard');
    }
}

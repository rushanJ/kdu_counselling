<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rating;
use App\Models\Counsellor;

class RateController extends Controller
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
            $user = User::find(59);
 
            $rate = new Rating;
            $rate->rate =5;
             
            $user = $user->rating()->save($rate);
            $user = User::find(59);
            dd($user->rating);
        }
    
        public function update($id,Request $data)
        {
        
            try {
               
                $user = User::find($id);
               
                $counsellor = Counsellor::firstWhere('user_id',$user->id);
                // dd($counsellor);
               
                $counsellor->no_of_responses =   $counsellor->no_of_responses+1 ;
                $counsellor->response_total =  $counsellor->response_total+ $data['rate'];
    
                $counsellor->save();
                // $counsellor->save();    
                // dd($counsellor['nic']);  //  
             
                 // dd($counsellor['nic']);  // 
                // dd($user->user_info);
              } catch (\Exception $e) {
                  return $e->getMessage();
              }
    
              return back()->withInput();
            // return view('admin/counsellor/edit',compact('user'));
    
            
        }
       
        
    
        
        
    }
    
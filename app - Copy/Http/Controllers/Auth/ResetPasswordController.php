<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;
    

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
        // dd($questions );
        return view('admin/resetPassword');
    }
    public function resetPassword(Request $request)
    {
        try {
           
    
            $user = User::find($request['user']);
            $password = Hash::make($request['password']);
            
            // dd($counsellor);
            $user->password =  $password ;
         
            $user->save();
            // $counsellor->save();    
            // dd($counsellor['nic']);  //  
        //  dd($password);
             // dd($counsellor['nic']);  // 
            // dd($user->user_info);
          } catch (\Exception $e) {
              return $e->getMessage();
          }

          return redirect('/home');
        // return view('admin/counsellor/edit',compact('user'));

        
    }
}

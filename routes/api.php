<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Session_Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/', function(Request $request) {
   
    return "Running";
});
Route::post('/auth', function(Request $request) {

    $user= User::where('email', $request['email'])->first();
        //Check Password
        if(!$user || !Hash::check($request['password'], $user->password) ){
            return response([
                'message'=>'Invalid Credentials'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response= [
            'user' => $user,
            'token'=> $token
        ];

        return response($response, 201);
});

Route::get('/sessions/{id}', function($id,Request $request) {


    $session_requests = \DB::select("SELECT `session__requests`.`id`,`session__requests`.`is_anonnimus`,CONCAT(`counsellors`.`f_name`,' ',`counsellors`.`l_name`) AS `student_name`,`users`.`name`AS `counsellor_name`, `session__requests`.`problem_type`,`session__requests`. `service_method`, `session__requests`.`remarks` FROM `session__requests`,`users`,`counsellors` WHERE `session__requests`.`student_id`=`counsellors`.`user_id` AND `session__requests`.`counseller_id`=`users`.`id` AND `session__requests`.`counseller_id`=$id;");

    

        return response($session_requests, 201);
});


<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\Session_Request;
use App\Models\Student_Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $questions = Question::all();       
        // dd($questions );
        return view('/service',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/questions/create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        try {
            if ($request['relationship']=='ANNONIMOUS')
            $session_request= Session_Request::create([
                'student_id' =>Auth::user()->id,
                'is_anonnimus' => 1,
                'counseller_id' => 0,
                'problem_type' =>  $request['type'],
              
                'service_method' => $request['service_method'],
                'remarks' => $request['remarks'],
                            ]);
            else 
            $session_request= Session_Request::create([
                'student_id' =>  Auth::user()->id,
                'counseller_id' => 0,
                'problem_type' =>  $request['type'],
                'is_anonnimus' => 0,
                'service_method' => $request['service_method'],
                'remarks' => $request['remarks'],
                            ]);
    
            $session_request->save();
        //  dd($request['relationship']);   
            foreach ( $request->question as $index => $id ) {
                print_r  ($request->answer);
                $question= Student_Request::create([
                    'question_id' =>$request->question[$index],
                    'request_id' => $session_request->id,
                    'answer' =>$request->answer[$index],
                  
                                ]);
                  
             }
             $question->save();
          } catch (\Exception $e) {
              return $e->getMessage();
          }

          return redirect('mysessions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::find($id);
        return view('admin/questions/view',compact('question'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $question = Question::find($id);
        return view('admin/questions/edit',compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, Question $question)
    {
        //
        $question = Question::find($id);
       
        $question->question=$request['question  '];
        // dd($que->question);
        $question->save(); 
        return view('admin/questions/edit',compact('question'));
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}

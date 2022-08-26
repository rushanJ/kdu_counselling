<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
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
        return view('admin/questions/all',compact('questions'));
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
        //
        try {
            $question= Question::create([
                'question' => $request['question'],
                            ]);
    
           
            $question->save();
            // dd($user->user_info);
          } catch (\Exception $e) {
              return $e->getMessage();
          }

          return redirect('questions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
       
        $question->question=$request['question'];
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
    public function destroy($id,Question $question)
    {
        //
        $user = Question::find($id)->delete();
        return redirect('questions');
    }
}

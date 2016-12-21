<?php

namespace App\Http\Controllers\Qasystem;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Question;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{

    public function __contruct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question = new Question;
        $questions = $question->select('id','title','options','answer','score')->paginate(8);
        return view('qasystem.question.list',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('qasystem.question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = new Question;
        $question->title = $request->get('title');
        $question->options = json_encode($request->get('option'));
        $question->answer = $request->get('answer');
        $question->score = $request->get('score');
        $question->insert_time = Date('YmdHis',time());
        if ($question->save()) {
            return redirect('/question');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $questions = Question::findOrFail($id);
        $questions->option=json_decode($questions->options);
        return view('qasystem.question.edit',compact('questions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $question = Question::find($request->get('id'));
        $question->title = $request->get('title');
        $question->options = json_encode($request->get('option'));
        $question->answer = $request->get('answer');
        $question->score = $request->get('score');
        $result = $question->save();
        if ($result) {
            return redirect('/question');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::find($id)->delete();
        return redirect()->back()->withInput()->withErrors('删除成功！');
    }
}

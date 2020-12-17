<?php

namespace edgewizz\rtrm\Controllers;
use App\Http\Controllers\Controller;
use Edgewizz\Edgecontent\Models\ProblemSetQues;
use Edgewizz\Rtrm\Models\RtrmAns;
use Edgewizz\Rtrm\Models\RtrmQues;
use Edgewizz\Unw\Models\UnwAns;
use Edgewizz\Unw\Models\UnwQues;
use Illuminate\Http\Request;

class RtrmController extends Controller
{
    //
    public function test(){
        dd('hello');
    }
    public function store(Request $request){
        $Q = new RtrmQues();
        $Q->question = $request->question;
        $Q->difficulty_level_id = $request->difficulty_level_id;
        $Q->save();
        /* answer_english */
        if($request->answer_english){
            $ans1 = new RtrmAns();
            $ans1->question_id = $Q->id;
            $ans1->answer = $request->answer_english;
            $ans1->language = 'english';
            $ans1->save();
            if($request->problem_set_id && $request->format_type_id){
                $pbq = new ProblemSetQues();
                $pbq->problem_set_id = $request->problem_set_id;
                $pbq->question_id = $Q->id;
                $pbq->format_type_id = $request->format_type_id;
                $pbq->save();
            }
        }
        /* answer_english */
        /* answer_hindi */
        if($request->answer_hindi){
            $ans1 = new RtrmAns();
            $ans1->question_id = $Q->id;
            $ans1->answer = $request->answer_hindi;
            $ans1->language = 'hindi';
            $ans1->save();
        }
        /* answer_hindi */
        return back();
    }
    public function edit($id, Request $request){
        
    }
}

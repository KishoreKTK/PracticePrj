<?php

namespace App\Http\Controllers\Survey;
use App\Http\Controllers\Controller;
use App\Models\Questionaire;
// use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function createform($questionaireId){
        $questionaireId = Questionaire::findorfail($questionaireId);
        return view('SurveyPrj.CreateQuestion',compact('questionaireId'));
    }

    public function Store($questionaireId){
        $data   = request()->all();
        // dd($data);
        $questionaireId = Questionaire::findorfail($questionaireId);
        $question = $questionaireId->Question()->create($data['question']);
        $question->answer()->createmany($data['answer']);
        return "Question Created Successfully please check tables";
        // return redirect('/viewquestion',$Questionaire->id);
    }
}

<?php

namespace App\Http\Controllers\Survey;
use App\Http\Controllers\Controller;
use App\Models\Questionaire;
use App\Models\User;

class QuestionaireController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $surveyquestion = Questionaire::all();
        return view('SurveyPrj.SurveyPage',compact('surveyquestion'));
    }

    public function create(){
        return view('SurveyPrj.CreateQuestionarie');
    }

    public function store(){
        $data   = request()->all();
     
        $data = Auth()->user()->Questionaire()->create($data);
        return $this->index();
    }


    public function show($questionaireId){
        $questionaireId = Questionaire::findorfail($questionaireId);
        return view('SurveyPrj.viewQuestionaire',compact('questionaireId'));
    }
}

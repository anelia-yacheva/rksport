<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'prep_importance.*' => 'required',
            'degree.*' => 'required',
            'fitness.*' => 'required',
            'ph_qualities.*' => 'required',
            'ph_prep.*' => 'required',
            'succ_skill.*' => 'required',
            'psy_prep.*' => 'required',
            'other_skills.*' => 'required',
            'other_skills.3' => 'nullable',
            'succ_factors.*' => 'required',
            'failure.*' => 'required',
            'years_play' => 'required',
            'times_week' => 'required',
            'hours_tren' => 'required',
            'holes_avg.*' => 'required',
            'preparation_level' => 'required',
            'enough_train' => 'required',
            'heat' => 'required',
            'ph_train' => 'required',
            'ph_prep_enough' => 'required',
            'bad_injuries' => 'required',
            'pain_after_game' => 'required',
            'yips_symptoms' => 'required',
            'experimental_study' => 'required',
            'nationality' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'handicap' => 'required'
        ], [
            '*.*.required'=>'Моля, попълнете полето.'
        ]);

        $answers = new Survey;

        $arrPrepImportance = $request['prep_importance'];
        $answers->q1 = json_encode($arrPrepImportance);
        $arrDegree = $request['degree'];
        $answers->q2 = json_encode($arrDegree);
        $arrFitness = $request['fitness'];
        $answers->q3 = json_encode($arrFitness);
        $arrPhQualities = $request['ph_qualities'];
        $answers->q4 = json_encode($arrPhQualities);        
        $arrPhPrep = $request['ph_prep'];
        $answers->q5_1 = json_encode($arrPhPrep);
        $arrSuccSkill = $request['succ_skill'];
        $answers->q5_2 = json_encode($arrSuccSkill);
        $arrPsyPrep = $request['psy_prep'];
        $answers->q5_3 = json_encode($arrSuccSkill);        
        $arrOtherSkills = $request['other_skills'];
        $answers->q5_4 = json_encode($arrOtherSkills);
        $arrSuccFactors = $request['succ_factors'];
        $answers->q6 = json_encode($arrSuccFactors);
        $arrFailure = $request['failure'];
        $answers->q7 = json_encode($arrFailure);
        $arrYears = $request['years_play'];
        $answers->q8 = $arrYears;
        $arrGoals = $request['goals'];
        $answers->q9 = json_encode($arrGoals);
        $arrTimesWeek = $request['times_week'];
        $answers->q10 = $arrTimesWeek;
        $arrHoursTren = $request['hours_tren'];
        $answers->q11 = $arrHoursTren;
        $arrHolesAvg = $request['holes_avg'];
        $answers->q12 = json_encode($arrHolesAvg);
        $arrBasicGoals = $request['basic_goals'];
        $answers->q13 = json_encode($arrBasicGoals);
        $arrPreparationLevel = $request['preparation_level'];
        $answers->q14 = $arrPreparationLevel;
        $arrEnoughTrain = $request['enough_train'];
        $answers->q15 = $arrEnoughTrain;
        $arrHeat = $request['heat'];
        $answers->q16 = $arrHeat;
        $arrPhTrain = $request['ph_train'];
        $answers->q17 = $arrPhTrain;
        $arrPhPrepEx = $request['ph_prep_ex'];
        $answers->q18 = json_encode($arrPhPrepEx);
        $arrPhPrepEnough = $request['ph_prep_enough'];
        $answers->q19 = $arrPhPrepEnough;
        $arrBadInjuries = $request['bad_injuries'];
        $answers->q20 = $arrBadInjuries;
        $painAfterGame = $request->input('pain_after_game');
        $answers->q21 = $painAfterGame;
        $yipsSymptoms = $request->input('yips_symptoms');
        $answers->q22 = $yipsSymptoms;
        $arrPsyPrepTools = $request['psy_prep_tools'];
        $answers->q23 = json_encode($arrPsyPrepTools);
        $arrExperimentalStudy = $request['experimental_study'];
        $answers->q24 = $arrExperimentalStudy;
        $arrOtherSports = $request['other_sports'];
        $answers->q25 = json_encode($arrOtherSports);
        $nationality = $request->input('nationality');
        $answers->nationality = $nationality;
        $arrGender = $request['gender'];
        $answers->gender = $arrGender;
        $age = $request->input('age');
        $answers->age = $age;
        $height = $request->input('height');
        $answers->height = $height;
        $weight = $request->input('weight');
        $answers->weight = $weight;
        $arrHandicap = $request['handicap'];
        $answers->handicap = $arrHandicap;

        $answers->save();
        return redirect('/survey')->with('success', 'Благодарим Ви за отговорите!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

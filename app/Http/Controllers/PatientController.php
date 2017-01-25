<?php

namespace Consultations\Http\Controllers;

use Illuminate\Http\Request;

use Consultations\Http\Requests;
use Consultations\Http\Requests\PatientRequest;

use Consultations\Patient;
use Consultations\User;
use Consultations\FunctionsModel;
use Redirect;
use Session;
use Carbon\Carbon;

use Yajra\Datatables\Facades\Datatables;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.patients.index');
    }

    public function datatablesindex(Request $request)
    {
        Carbon::setLocale(config('app.locale'));
        //$patients = Patient::where('id_doctor',$request->user()->id)->get();
        $patients = Patient::get();
        return Datatables::of($patients)
            ->edit_column('created_at','{!! \Carbon\Carbon::parse($created_at)->diffForHumans() !!}')
            ->add_column('actions',function($patient) {
                $actions = '<a href="/admin/patient/'. $patient->id .'"><i class="text-success fa fa-fw fa-info-circle"></i></a>
                            <a href="/admin/patient/'. $patient->id .'/edit"><i class="text-primary fa fa-fw fa-pencil-square-o"></i></a>
                            <a href="" OnClick="DeleteShow('.$patient->id.', \''.$patient->name.'\',\'Paciente\',\'patient\');" data-toggle="modal" data-target="#deleteModal"><i class="text-danger fa fa-fw fa-minus-square-o"></i></a>';
                return $actions;
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRequest $request)
    {
        if($request->diabetes == null){
            $request->diabetes = 0;
        }
        if($request->arterial_hypertension == null){
            $request->arterial_hypertension = 0;
        }
        if($request->asthma == null){
            $request->asthma = 0;
        }
        if($request->cardiopathy == null){
            $request->cardiopathy = 0;
        }
        if($request->nephropathy == null){
            $request->nephropathy = 0;
        }
        if($request->hepatopathy == null){
            $request->hepatopathy = 0;
        }
        if($request->pneumopathy == null){
            $request->pneumopathy = 0;
        }
        if($request->cancer == null){
            $request->cancer = 0;
        }
        if($request->mental_diseases == null){
            $request->mental_diseases = 0;
        }
        if($request->allergic_diseases == null){
            $request->allergic_diseases = 0;
        }
        if($request->endocrine_diseases == null){
            $request->endocrine_diseases = 0;
        }

        Patient::create([
                'id_doctor' => $request->id_doctor,
                'id_consulting_room' => $request->id_consulting_room,
                'name' => $request->name,
                'last_name' => $request->last_name,
                'genre' => $request->genre,
                'birth_date' => $request->birth_date,
                'state' => $request->state,
                'city' => $request->city,
                'postal_code' => $request->postal_code,
                'colony' => $request->colony,
                'street' => $request->street,
                'no_exterior' => $request->no_exterior,
                'no_interior' => $request->no_interior,
                'phone' => $request->phone,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'occupation' => $request->occupation,
                'scholarship' => $request->scholarship,
                'civil_status' => $request->civil_status,
                'religion' => $request->religion,
                'diabetes' => $request->diabetes,
                'arterial_hypertension' => $request->arterial_hypertension,
                'asthma' => $request->asthma,
                'cardiopathy' => $request->cardiopathy,
                'nephropathy' => $request->nephropathy,
                'hepatopathy' => $request->hepatopathy,
                'pneumopathy' => $request->pneumopathy,
                'cancer' => $request->cancer,
                'mental_diseases' => $request->mental_diseases,
                'allergic_diseases' => $request->allergic_diseases,
                'endocrine_diseases' => $request->endocrine_diseases,
                'others_family_background' => $request->others_family_background,
                'diseases' => $request->diseases,
                'previous_surgery' => $request->previous_surgery,
                'hospitalizations' => $request->hospitalizations,
                'traumas' => $request->traumas,
                'allergies' => $request->allergies,
                'transfusions' => $request->transfusions,
                'smoking' => $request->smoking,
                'alcoholism' => $request->alcoholism,
                'addictions' => $request->addictions,
                'immunizations' => $request->immunizations,
                'others_personal_history' => $request->others_personal_history,
                'menarca' => $request->menarca,
                'menstrual_rhythm' => $request->menstrual_rhythm,
                'g' => $request->g,
                'p' => $request->p,
                'a' => $request->a,
                'c' => $request->c,
                'fum' => $request->fum,
                'menopause' => $request->menopause,
                'cardiovascular_system' => $request->cardiovascular_system,
                'digestive_system' => $request->digestive_system,
                'respiratory_system' => $request->respiratory_system,
                'genitourinary_system' => $request->genitourinary_system,
                'lymphatic_system' => $request->lymphatic_system,
                'endocrine_system' => $request->endocrine_system,
                'osteomyoarticular_system' => $request->osteomyoarticular_system,
                'nervous_system' => $request->nervous_system,
                'integumentary_system' => $request->integumentary_system,
            ]);

        Session::flash('message-success','Paciente agregado correctamente.');
        return Redirect::to('/admin/patient');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        $patient->doctor = User::find($patient->id_doctor)->name;

        if($patient->genre == 'M'){
            $patient->genre = 'Masculino';
        }else if($patient->genre == 'F'){
            $patient->genre = 'Fememnino';
        }

        $patient->age = FunctionsModel::ageCalc($patient->birth_date);

        if($patient->scholarship == 'PE'){
            $patient->scholarship = 'Preescolar';
        }else if($patient->scholarship == 'PR'){
            $patient->scholarship = 'Primaria';
        }else if($patient->scholarship == 'SC'){
            $patient->scholarship = 'Secundaria';
        }else if($patient->scholarship == 'PP'){
            $patient->scholarship = 'Preparatoria';
        }else if($patient->scholarship == 'UN'){
            $patient->scholarship = 'Universidad';
        }

        if($patient->civil_status == 'S'){
            $patient->civil_status = 'Soltero';
        }else if($patient->civil_status == 'C'){
            $patient->civil_status = 'Casado';
        }else if($patient->civil_status == 'V'){
            $patient->civil_status = 'Viudo';
        }

        if($patient->smoking == 'S'){
            $patient->smoking = 'Positivo';
        }else if($patient->smoking == 'N'){
            $patient->smoking = 'Negativo';
        }

        if($patient->alcoholism == 'S'){
            $patient->alcoholism = 'Positivo';
        }else if($patient->alcoholism == 'N'){
            $patient->alcoholism = 'Negativo';
        }

        if($patient->addictions == 'S'){
            $patient->addictions = 'Positivo';
        }else if($patient->addictions == 'N'){
            $patient->addictions = 'Negativo';
        }

        if($patient->immunizations == 'C'){
            $patient->immunizations = 'Completas';
        }else if($patient->immunizations == 'I'){
            $patient->immunizations = 'Incompletas';
        }

        if($patient->fum != ''){
            $patient->fpp = FunctionsModel::fppCalc($patient->fum);
        }else{
            $patient->fpp = '';
        }

        return view('admin.patients.show',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('admin.patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PatientRequest $request, Patient $patient)
    {
        if($request->diabetes == null){
            $request->diabetes = 0;
        }
        if($request->arterial_hypertension == null){
            $request->arterial_hypertension = 0;
        }
        if($request->asthma == null){
            $request->asthma = 0;
        }
        if($request->cardiopathy == null){
            $request->cardiopathy = 0;
        }
        if($request->nephropathy == null){
            $request->nephropathy = 0;
        }
        if($request->hepatopathy == null){
            $request->hepatopathy = 0;
        }
        if($request->pneumopathy == null){
            $request->pneumopathy = 0;
        }
        if($request->cancer == null){
            $request->cancer = 0;
        }
        if($request->mental_diseases == null){
            $request->mental_diseases = 0;
        }
        if($request->allergic_diseases == null){
            $request->allergic_diseases = 0;
        }
        if($request->endocrine_diseases == null){
            $request->endocrine_diseases = 0;
        }

        $patient->update($request->all());

        Session::flash('message-success','Paciente actualizado correctamente.');
        return Redirect::to('/admin/patient/'.$patient->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();

        Session::flash('message-success','Paciente eliminado correctamente.');

        return response()->json([
            "message" => "deleted"
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleted()
    {
        return view('admin.patients.deleted');
    }

    public function datatablesdeleted(Request $request)
    {
        Carbon::setLocale(config('app.locale'));
        $patients = Patient::onlyTrashed()->get();
        return Datatables::of($patients)
            ->edit_column('created_at','{!! \Carbon\Carbon::parse($created_at)->diffForHumans() !!}')
            ->edit_column('deleted_at','{!! \Carbon\Carbon::parse($deleted_at)->diffForHumans() !!}')
            ->add_column('actions',function($patient) {
                $actions = '<a href="/admin/patient/'. $patient->id .'/restore"><i class="text-warning fa fa-fw fa-user-plus"></i></a>';
                return $actions;
            })
            ->make(true);
    }

    /**
     * Restore a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $patient = Patient::withTrashed()
                ->where('id',$id)
                ->first();

        $patient->restore();

        Session::flash('message-success','Paciente restaurado correctamente.');
        return Redirect::to('/admin/patient');
    }
}

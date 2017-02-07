<?php

namespace Consultations\Http\Controllers;

use Illuminate\Http\Request;

use Consultations\Http\Requests;
use Consultations\Http\Requests\ConsultingRoomRequest;

use Consultations\ConsultingRoom;
use Redirect;
use Session;
use Carbon\Carbon;

use Yajra\Datatables\Facades\Datatables;

class ConsultingRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.consulting_rooms.index');
    }

    public function datatablesindex(Request $request)
    {
        Carbon::setLocale(config('app.locale'));
        //$patients = Patient::where('id_doctor',$request->user()->id)->get();
        $consultingrooms = ConsultingRoom::get();
        return Datatables::of($consultingrooms)
            ->edit_column('created_at','{!! \Carbon\Carbon::parse($created_at)->diffForHumans() !!}')
            ->add_column('actions',function($consultingroom) {
                $actions = '<a href="/admin/consulting-room/'. $consultingroom->id .'"><i class="text-success fa fa-fw fa-info-circle"></i></a>
                            <a href="/admin/consulting-room/'. $consultingroom->id .'/edit"><i class="text-primary fa fa-fw fa-pencil-square-o"></i></a>
                            <a href="" OnClick="DeleteShow('.$consultingroom->id.', \''.$consultingroom->title.'\',\'Consultorio\',\'consulting-room\');" data-toggle="modal" data-target="#deleteModal"><i class="text-danger fa fa-fw fa-minus-square-o"></i></a>';
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
        return view('admin.consulting_rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConsultingRoomRequest $request)
    {
        if ($file = $request->file('logo')) {
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName = '/uploads/logos/';
            $destinationPath = public_path().$folderName;
            $safeName = str_random(10).'.'.$extension;
            $file->move($destinationPath, $safeName);
            $request->logo = $safeName;
        }

        ConsultingRoom::create([
                'title' => $request->title,
                'address' => $request->address,
                'lat' => $request->lat,
                'lng' => $request->lng,
                'logo' => $request->logo
            ]);

        Session::flash('message-success','Consultorio agregado correctamente.');
        //return Redirect::to('/admin/consulting-room');
        return "Consultorio agregado correctamente";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultingroom = ConsultingRoom::find($id);
        return view('admin.consulting_rooms.show',compact('consultingroom'));
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleted()
    {
        //
    }

    public function datatablesdeleted(Request $request)
    {
        //
    }

    /**
     * Restore a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        //
    }
}

<?php

namespace Consultations\Http\Controllers;

use Illuminate\Http\Request;

use Consultations\Http\Requests;
use Consultations\Http\Requests\ConsultingRoomRequest;

use Consultations\ConsultingRoom;
use File;
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
                'logo' => $request->logo,
                'monday_init_1' => $request->monday_init_1,
                'monday_finish_1' => $request->monday_finish_1,
                'monday_init_2' => $request->monday_init_2,
                'monday_finish_2' => $request->monday_finish_2,
                'tuesday_init_1' => $request->tuesday_init_1,
                'tuesday_finish_1' => $request->tuesday_finish_1,
                'tuesday_init_2' => $request->tuesday_init_2,
                'tuesday_finish_2' => $request->tuesday_finish_2,
                'wednesday_init_1' => $request->wednesday_init_1,
                'wednesday_finish_1' => $request->wednesday_finish_1,
                'wednesday_init_2' => $request->wednesday_init_2,
                'wednesday_finish_2' => $request->wednesday_finish_2,
                'thursday_init_1' => $request->thursday_init_1,
                'thursday_finish_1' => $request->thursday_finish_1,
                'thursday_init_2' => $request->thursday_init_2,
                'thursday_finish_2' => $request->thursday_finish_2,
                'friday_init_1' => $request->friday_init_1,
                'friday_finish_1' => $request->friday_finish_1,
                'friday_init_2' => $request->friday_init_2,
                'friday_finish_2' => $request->friday_finish_2,
                'saturday_init_1' => $request->saturday_init_1,
                'saturday_finish_1' => $request->saturday_finish_1,
                'saturday_init_2' => $request->saturday_init_2,
                'saturday_finish_2' => $request->saturday_finish_2,
                'sunday_init_1' => $request->sunday_init_1,
                'sunday_finish_1' => $request->sunday_finish_1,
                'sunday_init_2' => $request->sunday_init_2,
                'sunday_finish_2' => $request->sunday_finish_2
            ]);

        Session::flash('message-success','Consultorio agregado correctamente.');
        return Redirect::to('/admin/consulting-room');
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
        $consultingroom = ConsultingRoom::find($id);
        return view('admin.consulting_rooms.edit', compact('consultingroom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ConsultingRoomRequest $request, $id)
    {
        if ($file = $request->file('logo')) {
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName = '/uploads/logos/';
            $destinationPath = public_path().$folderName;
            $safeName = str_random(10).'.'.$extension;
            $file->move($destinationPath, $safeName);
            $request->logo = $safeName;

            File::delete(public_path().$folderName.$request->old_logo);
        }else{
            $request->logo = $request->old_logo;
        }

        $consultingroom = ConsultingRoom::find($id);

        $consultingroom->update([
                'title' => $request->title,
                'address' => $request->address,
                'lat' => $request->lat,
                'lng' => $request->lng,
                'logo' => $request->logo,
                'monday_init_1' => $request->monday_init_1,
                'monday_finish_1' => $request->monday_finish_1,
                'monday_init_2' => $request->monday_init_2,
                'monday_finish_2' => $request->monday_finish_2,
                'tuesday_init_1' => $request->tuesday_init_1,
                'tuesday_finish_1' => $request->tuesday_finish_1,
                'tuesday_init_2' => $request->tuesday_init_2,
                'tuesday_finish_2' => $request->tuesday_finish_2,
                'wednesday_init_1' => $request->wednesday_init_1,
                'wednesday_finish_1' => $request->wednesday_finish_1,
                'wednesday_init_2' => $request->wednesday_init_2,
                'wednesday_finish_2' => $request->wednesday_finish_2,
                'thursday_init_1' => $request->thursday_init_1,
                'thursday_finish_1' => $request->thursday_finish_1,
                'thursday_init_2' => $request->thursday_init_2,
                'thursday_finish_2' => $request->thursday_finish_2,
                'friday_init_1' => $request->friday_init_1,
                'friday_finish_1' => $request->friday_finish_1,
                'friday_init_2' => $request->friday_init_2,
                'friday_finish_2' => $request->friday_finish_2,
                'saturday_init_1' => $request->saturday_init_1,
                'saturday_finish_1' => $request->saturday_finish_1,
                'saturday_init_2' => $request->saturday_init_2,
                'saturday_finish_2' => $request->saturday_finish_2,
                'sunday_init_1' => $request->sunday_init_1,
                'sunday_finish_1' => $request->sunday_finish_1,
                'sunday_init_2' => $request->sunday_init_2,
                'sunday_finish_2' => $request->sunday_finish_2
            ]);

        Session::flash('message-success','Consultorio editado correctamente.');
        return Redirect::to('/admin/consulting-room');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consultingroom = ConsultingRoom::find($id);

        $consultingroom->delete();

        Session::flash('message-success','Consultorio eliminado correctamente.');

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
        return view('admin.consulting_rooms.deleted');
    }

    public function datatablesdeleted(Request $request)
    {
        Carbon::setLocale(config('app.locale'));
        $consultingrooms = ConsultingRoom::onlyTrashed()->get();
        return Datatables::of($consultingrooms)
            ->edit_column('created_at','{!! \Carbon\Carbon::parse($created_at)->diffForHumans() !!}')
            ->edit_column('deleted_at','{!! \Carbon\Carbon::parse($deleted_at)->diffForHumans() !!}')
            ->add_column('actions',function($patient) {
                $actions = '<a href="/admin/consulting-room/'. $patient->id .'/restore"><i class="text-warning fa fa-fw fa-user-plus"></i></a>';
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
        $consultingroom = ConsultingRoom::withTrashed()
                ->where('id',$id)
                ->first();

        $consultingroom->restore();

        Session::flash('message-success','Consultorio restaurado correctamente.');
        return Redirect::to('/admin/consulting-room');
    }
}

<?php

namespace Consultations\Http\Controllers;

use Illuminate\Http\Request;

use Consultations\Http\Requests;
use Consultations\Http\Requests\UserRequest;

use Consultations\User;
use Redirect;
use Session;
use Auth;
use Carbon\Carbon;

use Yajra\Datatables\Facades\Datatables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index');
    }

    public function datatablesindex(Request $request)
    {
        Carbon::setLocale(config('app.locale'));
        $users = User::where('id','!=',$request->user()->id)->get();
        //$users = User::get();
        return Datatables::of($users)
            ->edit_column('created_at','{!! \Carbon\Carbon::parse($created_at)->diffForHumans() !!}')
            ->add_column('actions',function($user) {
                $actions = '<a href="/admin/user/'. $user->id .'"><i class="text-success fa fa-fw fa-info-circle"></i></a>
                            <a href="/admin/user/'. $user->id .'/edit"><i class="text-primary fa fa-fw fa-pencil-square-o"></i></a>';
                //if($user->id != Auth::user()->id){
                    $actions .= '<a href="" OnClick="DeleteShow('.$user->id.', \''.$user->name.'\',\'Usuario\',\'user\');" data-toggle="modal" data-target="#deleteModal"><i class="text-danger fa fa-fw fa-minus-square-o"></i></a>';
                //}
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
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        User::create([
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'password' => $request->password,
            ]);

        Session::flash('message-success','Usuario agregado correctamente.');
        return Redirect::to('/admin/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        Carbon::setLocale(config('app.locale'));
        $user->antiquity = Carbon::parse($user->created_at)->diffForHumans();
        return view('admin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->all());

        Session::flash('message-success','Usuario actualizado correctamente.');
        return Redirect::to('/admin/user/'.$user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        Session::flash('success', 'Usuario eliminado correctamente.');

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
        return view('admin.users.deleted');
    }

    public function datatablesdeleted(Request $request)
    {
        Carbon::setLocale(config('app.locale'));
        $users = User::onlyTrashed()->get();
        return Datatables::of($users)
            ->edit_column('created_at','{!! \Carbon\Carbon::parse($created_at)->diffForHumans() !!}')
            ->edit_column('deleted_at','{!! \Carbon\Carbon::parse($deleted_at)->diffForHumans() !!}')
            ->add_column('actions',function($user) {
                $actions = '<a href="/admin/user/'. $user->id .'/restore"><i class="text-warning fa fa-fw fa-user-plus"></i></a>';
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
        $user = User::withTrashed()
                ->where('id',$id)
                ->first();

        $user->restore();

        Session::flash('message-success','Usuario restaurado correctamente.');
        return Redirect::to('/admin/user');
    }
}

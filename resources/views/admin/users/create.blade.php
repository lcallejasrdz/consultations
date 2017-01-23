@extends('admin.layouts.admin')

@section('head')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Usuarios <small>Agregar Usuario</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="{{ url('/admin') }}">Inicio</a>
                </li>
                <li>
                    <i class="fa fa-user"></i> <a href="{{ url('/admin/user') }}">Usuarios</a>
                </li>
                <li class="active">
                    <i class="fa fa-user-plus"></i> Agregar Usuario
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <!-- /.row -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Agregar Usuario</div>
                <div class="panel-body">
                    {!! Form::open(['route'=>'admin.user.store','method'=>'POST','role'=>'form','class'=>'form-horizontal']) !!}
                        {{ csrf_field() }}

                        @include('admin.users.forms.user')

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-check"></i> Registrar
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

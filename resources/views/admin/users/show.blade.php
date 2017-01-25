@extends('admin.layouts.admin')

@section('head')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Usuarios <small>Mostrar Usuario</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="{{ url('/admin') }}">Inicio</a>
                </li>
                <li>
                    <i class="fa fa-user"></i> <a href="{{ url('/admin/user') }}">Usuarios</a>
                </li>
                <li class="active">
                    <i class="fa fa-info-circle"></i> {{ $user->name }}
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
                <div class="panel-heading">{{ $user->name }}</div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $user->id }}</td>
                            </tr>
                            <tr>
                                <th>Nombre</th>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th>Correo Electrónico</th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th>Usuario</th>
                                <td>{{ $user->username }}</td>
                            </tr>
                            <tr>
                                <th>Antigüedad</th>
                                <td>{{ $user->antiquity }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection

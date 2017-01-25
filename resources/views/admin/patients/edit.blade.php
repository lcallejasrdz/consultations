@extends('admin.layouts.admin')

@section('styles')
    {!! Html::style('css/formValidation.min.css') !!}
@endsection

@section('head')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Pacientes <small>Editar Paciente</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="{{ url('/admin') }}">Inicio</a>
                </li>
                <li>
                    <i class="fa fa-user"></i> <a href="{{ url('/admin/patient') }}">Pacientes</a>
                </li>
                <li class="active">
                    <i class="fa fa-pencil-square"></i> Editar Paciente
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Paciente</div>
                <div class="panel-body">
                    {!! Form::model($patient,['route'=>['admin.patient.update',$patient->id],'method'=>'PUT','role'=>'form','class'=>'form-horizontal','id'=>'commentForm']) !!}
                        {{ csrf_field() }}

                        @include('admin.patients.forms.patient')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('assets/js/add-patient.js') !!}
@endsection

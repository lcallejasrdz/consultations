@extends('admin.layouts.admin')

@section('styles')
    {!! Html::style('css/formValidation.min.css') !!}
    <style>
        #map {
            height: 300px;
        }
    </style>
@endsection

@section('head')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Consultorios <small>Mostrar Consultorio</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="{{ url('/admin') }}">Inicio</a>
                </li>
                <li>
                    <i class="fa fa-map"></i> <a href="{{ url('/admin/consulting-room') }}">Consultorios</a>
                </li>
                <li class="active">
                    <i class="fa fa-info-circle"></i> {{ $consultingroom->title }}
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
                <div class="panel-heading">{{ $consultingroom->title }}</div>
                <div class="panel-body">
                    <div id="rootwizard">
                        <ul>
                            <li><a href="#tab1" data-toggle="tab">Consultorio</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane" id="tab1">

                                <hr>

                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Título</th>
                                            <td>{{ $consultingroom->title }}</td>
                                        </tr>
                                        <tr>
                                            <th>Dirección</th>
                                            <td>{{ $consultingroom->address }}</td>
                                        </tr>
                                        <tr>
                                            <th>Mapa</th>
                                            <td>
                                                <div id="map"></div>
                                                {!! Form::hidden('lat',old('lat', $consultingroom->lat),['class'=>'form-control','id'=>'lat']) !!}
                                                {!! Form::hidden('lng',old('lng', $consultingroom->lng),['class'=>'form-control','id'=>'lng']) !!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Logo</th>
                                            <td><img src="/uploads/logos/{{ $consultingroom->logo }}" class="logo" /></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('assets/js/show-consulting-room.js') !!}

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfkOiNa7u0lm3IZkPIACogMIb5E8FgcOY&libraries=places&callback=initMap" async defer></script>
@endsection

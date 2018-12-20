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
                            <li><a href="#tab2" data-toggle="tab">Horarios</a></li>
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
                                        @if($consultingroom->logo != '' && $consultingroom->logo != null)
                                            <tr>
                                                <th>Logo</th>
                                                <td><img src="/uploads/logos/{{ $consultingroom->logo }}" class="logo" /></td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane" id="tab2">
                                
                                <hr>

                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        @if($consultingroom->monday_init_1 != '' && $consultingroom->monday_init_1 != null)
                                            <tr>
                                                <th>Lunes</th>
                                                <td>
                                                    De {{ $consultingroom->monday_init_1 }} a {{ $consultingroom->monday_finish_1 }}
                                                    @if($consultingroom->monday_init_2 != '' && $consultingroom->monday_init_2 != null)
                                                        y de {{ $consultingroom->monday_init_2 }} a {{ $consultingroom->monday_finish_2 }}
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif

                                        @if($consultingroom->tuesday_init_1 != '' && $consultingroom->tuesday_init_1 != null)
                                            <tr>
                                                <th>Martes</th>
                                                <td>
                                                    De {{ $consultingroom->tuesday_init_1 }} a {{ $consultingroom->tuesday_finish_1 }}
                                                    @if($consultingroom->tuesday_init_2 != '' && $consultingroom->tuesday_init_2 != null)
                                                        y de {{ $consultingroom->tuesday_init_2 }} a {{ $consultingroom->tuesday_finish_2 }}
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif

                                        @if($consultingroom->wednesday_init_1 != '' && $consultingroom->wednesday_init_1 != null)
                                            <tr>
                                                <th>Miércoles</th>
                                                <td>
                                                    De {{ $consultingroom->wednesday_init_1 }} a {{ $consultingroom->wednesday_finish_1 }}
                                                    @if($consultingroom->wednesday_init_2 != '' && $consultingroom->wednesday_init_2 != null)
                                                        y de {{ $consultingroom->wednesday_init_2 }} a {{ $consultingroom->wednesday_finish_2 }}
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif

                                        @if($consultingroom->thursday_init_1 != '' && $consultingroom->thursday_init_1 != null)
                                            <tr>
                                                <th>Jueves</th>
                                                <td>
                                                    De {{ $consultingroom->thursday_init_1 }} a {{ $consultingroom->thursday_finish_1 }}
                                                    @if($consultingroom->thursday_init_2 != '' && $consultingroom->thursday_init_2 != null)
                                                        y de {{ $consultingroom->thursday_init_2 }} a {{ $consultingroom->thursday_finish_2 }}
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif

                                        @if($consultingroom->friday_init_1 != '' && $consultingroom->friday_init_1 != null)
                                            <tr>
                                                <th>Viernes</th>
                                                <td>
                                                    De {{ $consultingroom->friday_init_1 }} a {{ $consultingroom->friday_finish_1 }}
                                                    @if($consultingroom->friday_init_2 != '' && $consultingroom->friday_init_2 != null)
                                                        y de {{ $consultingroom->friday_init_2 }} a {{ $consultingroom->friday_finish_2 }}
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif

                                        @if($consultingroom->saturday_init_1 != '' && $consultingroom->saturday_init_1 != null)
                                            <tr>
                                                <th>Sábado</th>
                                                <td>
                                                    De {{ $consultingroom->saturday_init_1 }} a {{ $consultingroom->saturday_finish_1 }}
                                                    @if($consultingroom->saturday_init_2 != '' && $consultingroom->saturday_init_2 != null)
                                                        y de {{ $consultingroom->saturday_init_2 }} a {{ $consultingroom->saturday_finish_2 }}
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif

                                        @if($consultingroom->sunday != '' && $consultingroom->sunday != null)
                                            <tr>
                                                <th>Domingo</th>
                                                <td>
                                                    De {{ $consultingroom->sunday }} a {{ $consultingroom->sunday }}
                                                    @if($consultingroom->sunday != '' && $consultingroom->sunday != null)
                                                        y de {{ $consultingroom->sunday }} a {{ $consultingroom->sunday }}
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
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

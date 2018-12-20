@extends('admin.layouts.admin')

@section('styles')
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css') !!}
@endsection

@section('head')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Pruebas
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="{{ url('/admin') }}">Inicio</a>
                </li>
                <li class="active">
                    <i class="fa fa-map-marker"></i> Pruebas
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
                <div class="panel-heading">Agregar Consultorio</div>
                <div class="panel-body">
                    {!! Form::open() !!}
                        {{ csrf_field() }}

                        <div class="col-xs-6 col-md-2 form-group">
                            <div class="col-md-12">
                                {!! Form::text('tuesday_init_1',old('tuesday_init_1'),['class'=>'form-control timepicker','id'=>'tuesday_init_1','placeholder'=>'De']) !!}

                                @if ($errors->has('tuesday_init_1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tuesday_init_1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js') !!}
    <script>
        /* TimePicker */
        $('.timepicker').timepicker({
            timeFormat: 'HH:mm',
            interval: 30,
            dynamic: false,
            dropdown: true,
            scrollbar: true,
            change: function(time) {
                // the input field
                var element = $(this);
                console.log(element.attr("name"));
            }
        });
    </script>
@endsection

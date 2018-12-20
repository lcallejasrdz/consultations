@extends('layouts.template')

@section('styles')
    {!! Html::style('http://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css') !!}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Citas</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 form-group{{ $errors->has('id_consulting_room') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                {!! Form::select('id_consulting_room',$consultingrooms,old('id_consulting_room'),['class'=>'form-control','id'=>'id_consulting_room','placeholder' => 'Consultorio']) !!}

                                @if ($errors->has('id_consulting_room'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_consulting_room') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                {!! Form::text('date',old('date'),['class'=>'form-control datepicker','id'=>'date','placeholder'=>'Fecha']) !!}

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6 form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                {!! Form::text('time',old('time'),['class'=>'form-control timepicker','id'=>'time','placeholder'=>'Hora']) !!}

                                @if ($errors->has('time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                {!! Form::text('name',old('name'),['class'=>'form-control','id'=>'name','placeholder'=>'Nombre(s)']) !!}

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6 form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                {!! Form::text('last_name',old('last_name'),['class'=>'form-control','id'=>'last_name','placeholder'=>'Apellidos']) !!}

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                {!! Form::text('email',old('email'),['class'=>'form-control','id'=>'email','placeholder'=>'Correo Electrónico']) !!}

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6 form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                {!! Form::text('phone',old('phone'),['class'=>'form-control','id'=>'phone','placeholder'=>'Teléfono']) !!}

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('http://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js') !!}
    {!! Html::script('assets/js/add-appointment.js') !!}
@endsection
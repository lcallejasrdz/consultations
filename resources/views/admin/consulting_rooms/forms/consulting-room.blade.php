<div id="rootwizard">
    <ul>
        <li><a href="#tab1" data-toggle="tab">Consultorio</a></li>
        <li><a href="#tab2" data-toggle="tab">Horarios</a></li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane" id="tab1">

            <hr>
            
            <div class="row">
                <div class="col-md-12 form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    {!! Form::label('title', 'Título', ['class' => 'col-md-4 control-label']) !!}

                    <div class="col-md-8">
                        {!! Form::text('title',old('title'),['class'=>'form-control','id'=>'title']) !!}

                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 form-group{{ $errors->has('searchmap') ? ' has-error' : '' }}">
                    {!! Form::label('searchmap', 'Buscar', ['class' => 'col-md-4 control-label']) !!}

                    <div class="col-md-8">
                        {!! Form::text('searchmap',old('searchmap'),['class'=>'form-control','id'=>'searchmap']) !!}

                        @if ($errors->has('searchmap'))
                            <span class="help-block">
                                <strong>{{ $errors->first('searchmap') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 form-group{{ $errors->has('map') ? ' has-error' : '' }}">
                    {!! Form::label('map', 'Mapa', ['class' => 'col-md-4 control-label']) !!}

                    <div class="col-md-8">
                        <div id="map"></div>
                        {!! Form::hidden('lat',old('lat'),['class'=>'form-control','id'=>'lat']) !!}
                        {!! Form::hidden('lng',old('lng'),['class'=>'form-control','id'=>'lng']) !!}
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                    {!! Form::label('address', 'Dirección', ['class' => 'col-md-4 control-label']) !!}

                    <div class="col-md-8">
                        {!! Form::text('address',old('address'),['class'=>'form-control','id'=>'address','readonly']) !!}

                        @if ($errors->has('address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            
            @if(isset($consultingroom))
                <div class="row">
                    <div class="col-md-12 form-group">
                        {!! Form::label('teaser', 'Teaser', ['class' => 'col-md-4 control-label']) !!}

                        <div class="col-md-8">
                            <img src="/uploads/logos/{{ $consultingroom->logo }}" class="logo" />
                            {!! Form::hidden('old_logo',old('old_logo', $consultingroom->logo),['class'=>'form-control','id'=>'old_logo']) !!}
                        </div>
                    </div>
                </div>
            @endif
            
            <div class="row">
                <div class="col-md-12 form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
                    {!! Form::label('logo', 'Logo', ['class' => 'col-md-4 control-label']) !!}

                    <div class="col-md-8">
                        {!! Form::file('logo',old('logo'),['class'=>'form-control','id'=>'logo']) !!}

                        @if ($errors->has('logo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('logo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane" id="tab2">

            <hr>
            
            <div class="row">
                <div class="col-md-12">
                    {!! Form::label('monday', 'Lunes', ['class' => 'col-xs-12 col-md-4 control-label']) !!}

                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('monday_init_1') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('monday_init_1',old('monday_init_1'),['class'=>'form-control timepicker','id'=>'monday_init_1','placeholder'=>'De']) !!}

                            @if ($errors->has('monday_init_1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('monday_init_1') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('monday_finish_1') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('monday_finish_1',old('monday_finish_1'),['class'=>'form-control timepicker','id'=>'monday_finish_1','placeholder'=>'A']) !!}

                            @if ($errors->has('monday_finish_1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('monday_finish_1') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('monday_init_2') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('monday_init_2',old('monday_init_2'),['class'=>'form-control timepicker','id'=>'monday_init_2','placeholder'=>'De']) !!}

                            @if ($errors->has('monday_init_2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('monday_init_2') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('monday_finish_2') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('monday_finish_2',old('monday_finish_2'),['class'=>'form-control timepicker','id'=>'monday_finish_2','placeholder'=>'A']) !!}

                            @if ($errors->has('monday_finish_2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('monday_finish_2') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    {!! Form::label('tuesday', 'Martes', ['class' => 'col-xs-12 col-md-4 control-label']) !!}

                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('tuesday_init_1') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('tuesday_init_1',old('tuesday_init_1'),['class'=>'form-control timepicker','id'=>'tuesday_init_1','placeholder'=>'De']) !!}

                            @if ($errors->has('tuesday_init_1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tuesday_init_1') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('tuesday_finish_1') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('tuesday_finish_1',old('tuesday_finish_1'),['class'=>'form-control timepicker','id'=>'tuesday_finish_1','placeholder'=>'A']) !!}

                            @if ($errors->has('tuesday_finish_1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tuesday_finish_1') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('tuesday_init_2') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('tuesday_init_2',old('tuesday_init_2'),['class'=>'form-control timepicker','id'=>'tuesday_init_2','placeholder'=>'De']) !!}

                            @if ($errors->has('tuesday_init_2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tuesday_init_2') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('tuesday_finish_2') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('tuesday_finish_2',old('tuesday_finish_2'),['class'=>'form-control timepicker','id'=>'tuesday_finish_2','placeholder'=>'A']) !!}

                            @if ($errors->has('tuesday_finish_2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tuesday_finish_2') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    {!! Form::label('wednesday', 'Miercoles', ['class' => 'col-xs-12 col-md-4 control-label']) !!}

                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('wednesday_init_1') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('wednesday_init_1',old('wednesday_init_1'),['class'=>'form-control timepicker','id'=>'wednesday_init_1','placeholder'=>'De']) !!}

                            @if ($errors->has('wednesday_init_1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('wednesday_init_1') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('wednesday_finish_1') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('wednesday_finish_1',old('wednesday_finish_1'),['class'=>'form-control timepicker','id'=>'wednesday_finish_1','placeholder'=>'A']) !!}

                            @if ($errors->has('wednesday_finish_1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('wednesday_finish_1') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('wednesday_init_2') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('wednesday_init_2',old('wednesday_init_2'),['class'=>'form-control timepicker','id'=>'wednesday_init_2','placeholder'=>'De']) !!}

                            @if ($errors->has('wednesday_init_2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('wednesday_init_2') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('wednesday_finish_2') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('wednesday_finish_2',old('wednesday_finish_2'),['class'=>'form-control timepicker','id'=>'wednesday_finish_2','placeholder'=>'A']) !!}

                            @if ($errors->has('wednesday_finish_2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('wednesday_finish_2') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    {!! Form::label('thursday', 'Jueves', ['class' => 'col-xs-12 col-md-4 control-label']) !!}

                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('thursday_init_1') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('thursday_init_1',old('thursday_init_1'),['class'=>'form-control timepicker','id'=>'thursday_init_1','placeholder'=>'De']) !!}

                            @if ($errors->has('thursday_init_1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('thursday_init_1') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('thursday_finish_1') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('thursday_finish_1',old('thursday_finish_1'),['class'=>'form-control timepicker','id'=>'thursday_finish_1','placeholder'=>'A']) !!}

                            @if ($errors->has('thursday_finish_1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('thursday_finish_1') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('thursday_init_2') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('thursday_init_2',old('thursday_init_2'),['class'=>'form-control timepicker','id'=>'thursday_init_2','placeholder'=>'De']) !!}

                            @if ($errors->has('thursday_init_2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('thursday_init_2') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('thursday_finish_2') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('thursday_finish_2',old('thursday_finish_2'),['class'=>'form-control timepicker','id'=>'thursday_finish_2','placeholder'=>'A']) !!}

                            @if ($errors->has('thursday_finish_2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('thursday_finish_2') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    {!! Form::label('friday', 'Viernes', ['class' => 'col-xs-12 col-md-4 control-label']) !!}

                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('friday_init_1') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('friday_init_1',old('friday_init_1'),['class'=>'form-control timepicker','id'=>'friday_init_1','placeholder'=>'De']) !!}

                            @if ($errors->has('friday_init_1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('friday_init_1') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('friday_finish_1') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('friday_finish_1',old('friday_finish_1'),['class'=>'form-control timepicker','id'=>'friday_finish_1','placeholder'=>'A']) !!}

                            @if ($errors->has('friday_finish_1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('friday_finish_1') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('friday_init_2') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('friday_init_2',old('friday_init_2'),['class'=>'form-control timepicker','id'=>'friday_init_2','placeholder'=>'De']) !!}

                            @if ($errors->has('friday_init_2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('friday_init_2') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('friday_finish_2') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('friday_finish_2',old('friday_finish_2'),['class'=>'form-control timepicker','id'=>'friday_finish_2','placeholder'=>'A']) !!}

                            @if ($errors->has('friday_finish_2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('friday_finish_2') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    {!! Form::label('saturday', 'Sábado', ['class' => 'col-xs-12 col-md-4 control-label']) !!}

                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('saturday_init_1') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('saturday_init_1',old('saturday_init_1'),['class'=>'form-control timepicker','id'=>'saturday_init_1','placeholder'=>'De']) !!}

                            @if ($errors->has('saturday_init_1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('saturday_init_1') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('saturday_finish_1') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('saturday_finish_1',old('saturday_finish_1'),['class'=>'form-control timepicker','id'=>'saturday_finish_1','placeholder'=>'A']) !!}

                            @if ($errors->has('saturday_finish_1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('saturday_finish_1') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('saturday_init_2') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('saturday_init_2',old('saturday_init_2'),['class'=>'form-control timepicker','id'=>'saturday_init_2','placeholder'=>'De']) !!}

                            @if ($errors->has('saturday_init_2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('saturday_init_2') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('saturday_finish_2') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('saturday_finish_2',old('saturday_finish_2'),['class'=>'form-control timepicker','id'=>'saturday_finish_2','placeholder'=>'A']) !!}

                            @if ($errors->has('saturday_finish_2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('saturday_finish_2') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    {!! Form::label('sunday', 'Domingo', ['class' => 'col-xs-12 col-md-4 control-label']) !!}

                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('sunday_init_1') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('sunday_init_1',old('sunday_init_1'),['class'=>'form-control timepicker','id'=>'sunday_init_1','placeholder'=>'De']) !!}

                            @if ($errors->has('sunday_init_1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('sunday_init_1') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('sunday_finish_1') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('sunday_finish_1',old('sunday_finish_1'),['class'=>'form-control timepicker','id'=>'sunday_finish_1','placeholder'=>'A']) !!}

                            @if ($errors->has('sunday_finish_1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('sunday_finish_1') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('sunday_init_2') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('sunday_init_2',old('sunday_init_2'),['class'=>'form-control timepicker','id'=>'sunday_init_2','placeholder'=>'De']) !!}

                            @if ($errors->has('sunday_init_2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('sunday_init_2') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 form-group{{ $errors->has('sunday_finish_2') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('sunday_finish_2',old('sunday_finish_2'),['class'=>'form-control timepicker','id'=>'sunday_finish_2','placeholder'=>'A']) !!}

                            @if ($errors->has('sunday_finish_2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('sunday_finish_2') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 form-group">
                    </div>
                    <div class="col-xs-12 col-md-8 dob-container form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::hidden('dob',old('dob'),['class'=>'form-control','id'=>'dob']) !!}

                            @if ($errors->has('dob'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('dob') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="pager wizard">
            <li class="previous"><a href="#">Anterior</a></li>
            <li class="next"><a href="#">Siguiente</a></li>
            <li class="finish"><a href="javascript:;" style="float:right;">Finish</a></li>
        </ul>
    </div>
</div>

<div id="rootwizard">
    <ul>
        <li><a href="#tab1" data-toggle="tab">Consultorio</a></li>
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

        <ul class="pager wizard">
            <li class="previous"><a href="#">Anterior</a></li>
            <li class="next"><a href="#">Siguiente</a></li>
            <li class="finish"><a href="javascript:;" style="float:right;">Finish</a></li>
        </ul>
    </div>
</div>

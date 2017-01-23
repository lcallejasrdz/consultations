<div id="rootwizard">
    <ul>
        <li><a href="#tab1" data-toggle="tab">Datos Personales</a></li>
        <li><a href="#tab2" data-toggle="tab">Datos Generales</a></li>
        <li><a href="#tab3" data-toggle="tab">AF</a></li>
        <li><a href="#tab4" data-toggle="tab">APP</a></li>
        <li><a href="#tab5" data-toggle="tab">AGO</a></li>
        <li><a href="#tab6" data-toggle="tab">Aparatos y Sistemas</a></li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane" id="tab1">

            <hr>
            
            <div class="form-group{{ $errors->has('id_doctor') ? ' has-error' : '' }}">
                {!! Form::label('id_doctor', 'Doctor', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::select('id_doctor',['1' => 'Luis Eduardo','2' => 'Miguel Angel','3' => 'Guadalupe Callejas'],old('id_doctor','1'),['class'=>'form-control','id'=>'id_doctor','placeholder' => 'Doctor']) !!}

                    @if ($errors->has('id_doctor'))
                        <span class="help-block">
                            <strong>{{ $errors->first('id_doctor') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('id_consulting_room') ? ' has-error' : '' }}">
                {!! Form::label('id_consulting_room', 'Consultorio', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::select('id_consulting_room',['1' => 'Fuentes','2' => 'Tlalnepantla','3' => 'Atizapán'],old('id_consulting_room'),['class'=>'form-control','id'=>'id_consulting_room','placeholder' => 'Consultorio']) !!}

                    @if ($errors->has('id_consulting_room'))
                        <span class="help-block">
                            <strong>{{ $errors->first('id_consulting_room') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                {!! Form::label('name', 'Nombre(s)', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::text('name',old('name'),['class'=>'form-control','id'=>'name']) !!}

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                {!! Form::label('last_name', 'Apellidos', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::text('last_name',old('last_name'),['class'=>'form-control','id'=>'last_name']) !!}

                    @if ($errors->has('last_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('genre') ? ' has-error' : '' }}">
                {!! Form::label('genre', 'Género', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    <label class="radio-inline">
                        {!! Form::radio('genre', 'M', true) !!}  Masculino
                    </label>
                    <label class="radio-inline">
                        {!! Form::radio('genre', 'F') !!}  Femenino
                    </label>

                    @if ($errors->has('genre'))
                        <span class="help-block">
                            <strong>{{ $errors->first('genre') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('birth_date') ? ' has-error' : '' }}">
                {!! Form::label('birth_date', 'Fecha de Nacimiento', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::text('birth_date',old('birth_date'),['class'=>'form-control datepicker','id'=>'birth_date']) !!}

                    @if ($errors->has('birth_date'))
                        <span class="help-block">
                            <strong>{{ $errors->first('birth_date') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                {!! Form::label('age', 'Edad', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::text('age',old('age'),['class'=>'form-control datepicker','id'=>'age','disabled']) !!}

                    @if ($errors->has('age'))
                        <span class="help-block">
                            <strong>{{ $errors->first('age') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    
        <div class="tab-pane" id="tab2" disabled="disabled">

            <hr>
            
            <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                {!! Form::label('state', 'Estado', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::text('state',old('state'),['class'=>'form-control','id'=>'state']) !!}

                    @if ($errors->has('state'))
                        <span class="help-block">
                            <strong>{{ $errors->first('state') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                {!! Form::label('city', 'Ciudad', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::text('city',old('city'),['class'=>'form-control','id'=>'city']) !!}

                    @if ($errors->has('city'))
                        <span class="help-block">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('postal_code') ? ' has-error' : '' }}">
                {!! Form::label('postal_code', 'Código Postal', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::text('postal_code',old('postal_code'),['class'=>'form-control','id'=>'postal_code']) !!}

                    @if ($errors->has('postal_code'))
                        <span class="help-block">
                            <strong>{{ $errors->first('postal_code') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('colony') ? ' has-error' : '' }}">
                {!! Form::label('colony', 'Colonia', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::text('colony',old('colony'),['class'=>'form-control','id'=>'colony']) !!}

                    @if ($errors->has('colony'))
                        <span class="help-block">
                            <strong>{{ $errors->first('colony') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('street') ? ' has-error' : '' }}">
                {!! Form::label('street', 'Calle', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::text('street',old('street'),['class'=>'form-control','id'=>'street']) !!}

                    @if ($errors->has('street'))
                        <span class="help-block">
                            <strong>{{ $errors->first('street') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('no_exterior') ? ' has-error' : '' }}">
                {!! Form::label('no_exterior', 'Número Exterior', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::text('no_exterior',old('no_exterior'),['class'=>'form-control','id'=>'no_exterior']) !!}

                    @if ($errors->has('no_exterior'))
                        <span class="help-block">
                            <strong>{{ $errors->first('no_exterior') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('no_interior') ? ' has-error' : '' }}">
                {!! Form::label('no_interior', 'Número Interior', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::text('no_interior',old('no_interior'),['class'=>'form-control','id'=>'no_interior']) !!}

                    @if ($errors->has('no_interior'))
                        <span class="help-block">
                            <strong>{{ $errors->first('no_interior') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                {!! Form::label('phone', 'Teléfono', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::text('phone',old('phone'),['class'=>'form-control','id'=>'phone']) !!}

                    @if ($errors->has('phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                {!! Form::label('mobile', 'Celular', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::text('mobile',old('mobile'),['class'=>'form-control','id'=>'mobile']) !!}

                    @if ($errors->has('mobile'))
                        <span class="help-block">
                            <strong>{{ $errors->first('mobile') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                {!! Form::label('email', 'Correo Electrónico', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::email('email',old('email'),['class'=>'form-control','id'=>'email']) !!}

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('occupation') ? ' has-error' : '' }}">
                {!! Form::label('occupation', 'Ocupación', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::text('occupation',old('occupation'),['class'=>'form-control','id'=>'occupation']) !!}

                    @if ($errors->has('occupation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('occupation') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('scholarship') ? ' has-error' : '' }}">
                {!! Form::label('scholarship', 'Escolaridad', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::select('scholarship',['PE' => 'Preescolar','PR' => 'Primaria','SC' => 'Secundaria','PP' => 'Preparatoria','UN' => 'Universidad'],old('scholarship'),['class'=>'form-control','id'=>'scholarship','placeholder' => 'Escolaridad']) !!}

                    @if ($errors->has('scholarship'))
                        <span class="help-block">
                            <strong>{{ $errors->first('scholarship') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('civil_status') ? ' has-error' : '' }}">
                {!! Form::label('civil_status', 'Estado Civil', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    <label class="radio-inline">
                        {!! Form::radio('civil_status', 'S', true) !!}  Soltero
                    </label>
                    <label class="radio-inline">
                        {!! Form::radio('civil_status', 'C') !!}  Casado
                    </label>
                    <label class="radio-inline">
                        {!! Form::radio('civil_status', 'V') !!}  Viudo
                    </label>

                    @if ($errors->has('civil_status'))
                        <span class="help-block">
                            <strong>{{ $errors->first('civil_status') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('religion') ? ' has-error' : '' }}">
                {!! Form::label('religion', 'Religión', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::text('religion',old('religion'),['class'=>'form-control','id'=>'religion']) !!}

                    @if ($errors->has('religion'))
                        <span class="help-block">
                            <strong>{{ $errors->first('religion') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    
        <div class="tab-pane" id="tab3" disabled="disabled">

            <hr>
            
            <div class="form-group{{ $errors->has('diabetes') ? ' has-error' : '' }}">
                {!! Form::label('diabetes', 'Diabetes', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('diabetes', 1, old('diabetes', 0)) !!}
                        </label>
                    </div>

                    @if ($errors->has('diabetes'))
                        <span class="help-block">
                            <strong>{{ $errors->first('diabetes') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('arterial_hypertension') ? ' has-error' : '' }}">
                {!! Form::label('arterial_hypertension', 'Hipertensión Arterial', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('arterial_hypertension', 1) !!}
                        </label>
                    </div>

                    @if ($errors->has('arterial_hypertension'))
                        <span class="help-block">
                            <strong>{{ $errors->first('arterial_hypertension') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('asthma') ? ' has-error' : '' }}">
                {!! Form::label('asthma', 'Asma', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('asthma', 1) !!}
                        </label>
                    </div>

                    @if ($errors->has('asthma'))
                        <span class="help-block">
                            <strong>{{ $errors->first('asthma') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('cardiopathy') ? ' has-error' : '' }}">
                {!! Form::label('cardiopathy', 'Cardiopatías', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('cardiopathy', 1) !!}
                        </label>
                    </div>

                    @if ($errors->has('cardiopathy'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cardiopathy') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('nephropathy') ? ' has-error' : '' }}">
                {!! Form::label('nephropathy', 'Nefropatías', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('nephropathy', 1) !!}
                        </label>
                    </div>

                    @if ($errors->has('nephropathy'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nephropathy') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('hepatopathy') ? ' has-error' : '' }}">
                {!! Form::label('hepatopathy', 'Hepatopatías', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('hepatopathy', 1) !!}
                        </label>
                    </div>

                    @if ($errors->has('hepatopathy'))
                        <span class="help-block">
                            <strong>{{ $errors->first('hepatopathy') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('pneumopathy') ? ' has-error' : '' }}">
                {!! Form::label('pneumopathy', 'Neumopatías', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('pneumopathy', 1) !!}
                        </label>
                    </div>

                    @if ($errors->has('pneumopathy'))
                        <span class="help-block">
                            <strong>{{ $errors->first('pneumopathy') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('cancer') ? ' has-error' : '' }}">
                {!! Form::label('cancer', 'Cáncer', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('cancer', 1) !!}
                        </label>
                    </div>

                    @if ($errors->has('cancer'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cancer') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('mental_diseases') ? ' has-error' : '' }}">
                {!! Form::label('mental_diseases', 'Enfermedades Mentales', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('mental_diseases', 1) !!}
                        </label>
                    </div>

                    @if ($errors->has('mental_diseases'))
                        <span class="help-block">
                            <strong>{{ $errors->first('mental_diseases') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('allergic_diseases') ? ' has-error' : '' }}">
                {!! Form::label('allergic_diseases', 'Enfermedades Alérgicas', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('allergic_diseases', 1) !!}
                        </label>
                    </div>

                    @if ($errors->has('allergic_diseases'))
                        <span class="help-block">
                            <strong>{{ $errors->first('allergic_diseases') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('endocrine_diseases') ? ' has-error' : '' }}">
                {!! Form::label('endocrine_diseases', 'Enfermedades Endócrinas', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('endocrine_diseases', 1) !!}
                        </label>
                    </div>

                    @if ($errors->has('endocrine_diseases'))
                        <span class="help-block">
                            <strong>{{ $errors->first('endocrine_diseases') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('others_family_background') ? ' has-error' : '' }}">
                {!! Form::label('others_family_background', 'Otras', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::textarea('others_family_background',old('others_family_background'),['class'=>'form-control','id'=>'others_family_background']) !!}

                    @if ($errors->has('others_family_background'))
                        <span class="help-block">
                            <strong>{{ $errors->first('others_family_background') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    
        <div class="tab-pane" id="tab4" disabled="disabled">

            <hr>
            
            <div class="form-group{{ $errors->has('diseases') ? ' has-error' : '' }}">
                {!! Form::label('diseases', 'Enfermedades', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::textarea('diseases',old('diseases'),['class'=>'form-control','id'=>'diseases']) !!}

                    @if ($errors->has('diseases'))
                        <span class="help-block">
                            <strong>{{ $errors->first('diseases') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('previous_surgery') ? ' has-error' : '' }}">
                {!! Form::label('previous_surgery', 'Cirugías Previas', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::textarea('previous_surgery',old('previous_surgery'),['class'=>'form-control','id'=>'previous_surgery']) !!}

                    @if ($errors->has('previous_surgery'))
                        <span class="help-block">
                            <strong>{{ $errors->first('previous_surgery') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('hospitalizations') ? ' has-error' : '' }}">
                {!! Form::label('hospitalizations', 'Hospitalizaciones', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::textarea('hospitalizations',old('hospitalizations'),['class'=>'form-control','id'=>'hospitalizations']) !!}

                    @if ($errors->has('hospitalizations'))
                        <span class="help-block">
                            <strong>{{ $errors->first('hospitalizations') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('traumas') ? ' has-error' : '' }}">
                {!! Form::label('traumas', 'Traumas', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::textarea('traumas',old('traumas'),['class'=>'form-control','id'=>'traumas']) !!}

                    @if ($errors->has('traumas'))
                        <span class="help-block">
                            <strong>{{ $errors->first('traumas') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('allergies') ? ' has-error' : '' }}">
                {!! Form::label('allergies', 'Alérgias', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::textarea('allergies',old('allergies'),['class'=>'form-control','id'=>'allergies']) !!}

                    @if ($errors->has('allergies'))
                        <span class="help-block">
                            <strong>{{ $errors->first('allergies') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('transfusions') ? ' has-error' : '' }}">
                {!! Form::label('transfusions', 'Transfusiones', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::textarea('transfusions',old('transfusions'),['class'=>'form-control','id'=>'transfusions']) !!}

                    @if ($errors->has('transfusions'))
                        <span class="help-block">
                            <strong>{{ $errors->first('transfusions') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('smoking') ? ' has-error' : '' }}">
                {!! Form::label('smoking', 'Tabaquismo', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    <label class="radio-inline">
                        {!! Form::radio('smoking', 'S') !!}  Positivo
                    </label>
                    <label class="radio-inline">
                        {!! Form::radio('smoking', 'N', true) !!}  Negativo
                    </label>

                    @if ($errors->has('smoking'))
                        <span class="help-block">
                            <strong>{{ $errors->first('smoking') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('alcoholism') ? ' has-error' : '' }}">
                {!! Form::label('alcoholism', 'Alcoholismo', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    <label class="radio-inline">
                        {!! Form::radio('alcoholism', 'S') !!}  Positivo
                    </label>
                    <label class="radio-inline">
                        {!! Form::radio('alcoholism', 'N', true) !!}  Negativo
                    </label>

                    @if ($errors->has('alcoholism'))
                        <span class="help-block">
                            <strong>{{ $errors->first('alcoholism') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('addictions') ? ' has-error' : '' }}">
                {!! Form::label('addictions', 'Toxicomanías', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    <label class="radio-inline">
                        {!! Form::radio('addictions', 'S') !!}  Positivo
                    </label>
                    <label class="radio-inline">
                        {!! Form::radio('addictions', 'N', true) !!}  Negativo
                    </label>

                    @if ($errors->has('addictions'))
                        <span class="help-block">
                            <strong>{{ $errors->first('addictions') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('immunizations') ? ' has-error' : '' }}">
                {!! Form::label('immunizations', 'Inmunizaciones', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    <label class="radio-inline">
                        {!! Form::radio('immunizations', 'C', true) !!}  Completas
                    </label>
                    <label class="radio-inline">
                        {!! Form::radio('immunizations', 'I') !!}  Incompletas
                    </label>

                    @if ($errors->has('immunizations'))
                        <span class="help-block">
                            <strong>{{ $errors->first('immunizations') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('others_personal_history') ? ' has-error' : '' }}">
                {!! Form::label('others_personal_history', 'Otros', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::textarea('others_personal_history',old('others_personal_history'),['class'=>'form-control','id'=>'others_personal_history']) !!}

                    @if ($errors->has('others_personal_history'))
                        <span class="help-block">
                            <strong>{{ $errors->first('others_personal_history') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    
        <div class="tab-pane" id="tab5" disabled="disabled">

            <hr>
            
            <div class="form-group{{ $errors->has('menarca') ? ' has-error' : '' }}">
                {!! Form::label('menarca', 'Menarca', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::text('menarca',old('menarca'),['class'=>'form-control','id'=>'menarca']) !!}

                    @if ($errors->has('menarca'))
                        <span class="help-block">
                            <strong>{{ $errors->first('menarca') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('menstrual_rhythm') ? ' has-error' : '' }}">
                {!! Form::label('menstrual_rhythm', 'Ritmo Menstrual', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::text('menstrual_rhythm',old('menstrual_rhythm'),['class'=>'form-control','id'=>'menstrual_rhythm']) !!}

                    @if ($errors->has('menstrual_rhythm'))
                        <span class="help-block">
                            <strong>{{ $errors->first('menstrual_rhythm') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('g') ? ' has-error' : '' }}">
                {!! Form::label('g', 'G', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('g', 1) !!}
                        </label>
                    </div>

                    @if ($errors->has('g'))
                        <span class="help-block">
                            <strong>{{ $errors->first('g') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('p') ? ' has-error' : '' }}">
                {!! Form::label('p', 'P', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('p', 1) !!}
                        </label>
                    </div>

                    @if ($errors->has('p'))
                        <span class="help-block">
                            <strong>{{ $errors->first('p') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('a') ? ' has-error' : '' }}">
                {!! Form::label('a', 'A', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('a', 1) !!}
                        </label>
                    </div>

                    @if ($errors->has('a'))
                        <span class="help-block">
                            <strong>{{ $errors->first('a') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('c') ? ' has-error' : '' }}">
                {!! Form::label('c', 'C', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('c', 1) !!}
                        </label>
                    </div>

                    @if ($errors->has('c'))
                        <span class="help-block">
                            <strong>{{ $errors->first('c') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('fum') ? ' has-error' : '' }}">
                {!! Form::label('fum', 'FUM', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::text('fum',old('fum'),['class'=>'form-control datepicker','id'=>'fum']) !!}

                    @if ($errors->has('fum'))
                        <span class="help-block">
                            <strong>{{ $errors->first('fum') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('fpp') ? ' has-error' : '' }}">
                {!! Form::label('fpp', 'FPP', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::text('fpp',old('fpp'),['class'=>'form-control','id'=>'fpp','disabled']) !!}

                    @if ($errors->has('fpp'))
                        <span class="help-block">
                            <strong>{{ $errors->first('fpp') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('menopause') ? ' has-error' : '' }}">
                {!! Form::label('menopause', 'Menopausia', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::text('menopause',old('menopause'),['class'=>'form-control','id'=>'menopause']) !!}

                    @if ($errors->has('menopause'))
                        <span class="help-block">
                            <strong>{{ $errors->first('menopause') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    
        <div class="tab-pane" id="tab6" disabled="disabled">

            <hr>
            
            <div class="form-group{{ $errors->has('cardiovascular_system') ? ' has-error' : '' }}">
                {!! Form::label('cardiovascular_system', 'Sistema Cardiovascular', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::textarea('cardiovascular_system',old('cardiovascular_system'),['class'=>'form-control','id'=>'cardiovascular_system']) !!}

                    @if ($errors->has('cardiovascular_system'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cardiovascular_system') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('digestive_system') ? ' has-error' : '' }}">
                {!! Form::label('digestive_system', 'Sistema Digestivo', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::textarea('digestive_system',old('digestive_system'),['class'=>'form-control','id'=>'digestive_system']) !!}

                    @if ($errors->has('digestive_system'))
                        <span class="help-block">
                            <strong>{{ $errors->first('digestive_system') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('respiratory_system') ? ' has-error' : '' }}">
                {!! Form::label('respiratory_system', 'Sistema Respiratorio', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::textarea('respiratory_system',old('respiratory_system'),['class'=>'form-control','id'=>'respiratory_system']) !!}

                    @if ($errors->has('respiratory_system'))
                        <span class="help-block">
                            <strong>{{ $errors->first('respiratory_system') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('genitourinary_system') ? ' has-error' : '' }}">
                {!! Form::label('genitourinary_system', 'Sistema Genitourinario', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::textarea('genitourinary_system',old('genitourinary_system'),['class'=>'form-control','id'=>'genitourinary_system']) !!}

                    @if ($errors->has('genitourinary_system'))
                        <span class="help-block">
                            <strong>{{ $errors->first('genitourinary_system') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('lymphatic_system') ? ' has-error' : '' }}">
                {!! Form::label('lymphatic_system', 'Sistema Linfohemático', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::textarea('lymphatic_system',old('lymphatic_system'),['class'=>'form-control','id'=>'lymphatic_system']) !!}

                    @if ($errors->has('lymphatic_system'))
                        <span class="help-block">
                            <strong>{{ $errors->first('lymphatic_system') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('endocrine_system') ? ' has-error' : '' }}">
                {!! Form::label('endocrine_system', 'Sistema Endócrino', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::textarea('endocrine_system',old('endocrine_system'),['class'=>'form-control','id'=>'endocrine_system']) !!}

                    @if ($errors->has('endocrine_system'))
                        <span class="help-block">
                            <strong>{{ $errors->first('endocrine_system') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('osteomyoarticular_system') ? ' has-error' : '' }}">
                {!! Form::label('osteomyoarticular_system', 'Sistema Osteomioarticular', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::textarea('osteomyoarticular_system',old('osteomyoarticular_system'),['class'=>'form-control','id'=>'osteomyoarticular_system']) !!}

                    @if ($errors->has('osteomyoarticular_system'))
                        <span class="help-block">
                            <strong>{{ $errors->first('osteomyoarticular_system') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('nervous_system') ? ' has-error' : '' }}">
                {!! Form::label('nervous_system', 'Sistema Nervioso', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::textarea('nervous_system',old('nervous_system'),['class'=>'form-control','id'=>'nervous_system']) !!}

                    @if ($errors->has('nervous_system'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nervous_system') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('integumentary_system') ? ' has-error' : '' }}">
                {!! Form::label('integumentary_system', 'Sistema Tegumentario', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">
                    {!! Form::textarea('integumentary_system',old('integumentary_system'),['class'=>'form-control','id'=>'integumentary_system']) !!}

                    @if ($errors->has('integumentary_system'))
                        <span class="help-block">
                            <strong>{{ $errors->first('integumentary_system') }}</strong>
                        </span>
                    @endif
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

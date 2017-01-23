@extends('admin.layouts.admin')

@section('head')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Pacientes <small>Mostrar Paciente</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="{{ url('/admin') }}">Inicio</a>
                </li>
                <li>
                    <i class="fa fa-user"></i> <a href="{{ url('/admin/patient') }}">Pacientes</a>
                </li>
                <li class="active">
                    <i class="fa fa-pencil-square"></i> {{ $patient->name }}
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
                <div class="panel-heading">{{ $patient->name }}</div>
                <div class="panel-body">
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

                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Doctor</th>
                                            <td>{{ $patient->doctor }}</td>
                                        </tr>
                                        <tr>
                                            <th>Consultorio</th>
                                            <td>{{ $patient->consulting_room }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nombre</th>
                                            <td>{{ $patient->last_name }} {{ $patient->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Género</th>
                                            <td>{{ $patient->genre }}</td>
                                        </tr>
                                        <tr>
                                            <th>Fecha de Nacimiento</th>
                                            <td>{{ $patient->birth_date }}</td>
                                        </tr>
                                        <tr>
                                            <th>Edad</th>
                                            <td>{{ $patient->age }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        
                            <div class="tab-pane" id="tab2" disabled="disabled">

                                <hr>

                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Estado</th>
                                            <td>{{ $patient->state }}</td>
                                        </tr>
                                        <tr>
                                            <th>Ciudad</th>
                                            <td>{{ $patient->city }}</td>
                                        </tr>
                                        <tr>
                                            <th>Código Postal</th>
                                            <td>{{ $patient->postal_code }}</td>
                                        </tr>
                                        <tr>
                                            <th>Colonia</th>
                                            <td>{{ $patient->colony }}</td>
                                        </tr>
                                        <tr>
                                            <th>Calle</th>
                                            <td>{{ $patient->street }}</td>
                                        </tr>
                                        <tr>
                                            <th>Número Exterior</th>
                                            <td>{{ $patient->no_exterior }}</td>
                                        </tr>
                                        <tr>
                                            <th>Número Interior</th>
                                            <td>{{ $patient->no_interior }}</td>
                                        </tr>
                                        <tr>
                                            <th>Teléfono</th>
                                            <td>{{ $patient->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th>Celular</th>
                                            <td>{{ $patient->mobile }}</td>
                                        </tr>
                                        <tr>
                                            <th>Correo Electrónico</th>
                                            <td>{{ $patient->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Ocupación</th>
                                            <td>{{ $patient->occupation }}</td>
                                        </tr>
                                        <tr>
                                            <th>Escolaridad</th>
                                            <td>{{ $patient->scholarship }}</td>
                                        </tr>
                                        <tr>
                                            <th>Estado Civil</th>
                                            <td>{{ $patient->civil_status }}</td>
                                        </tr>
                                        <tr>
                                            <th>Religión</th>
                                            <td>{{ $patient->religion }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        
                            <div class="tab-pane" id="tab3" disabled="disabled">

                                <hr>

                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Diabetes</th>
                                            <td>
                                                @if($patient->diabetes == 1)
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Hipertensión Arterial</th>
                                            <td>
                                                @if($patient->arterial_hypertension == 1)
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Asma</th>
                                            <td>
                                                @if($patient->asthma == 1)
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Cardiopatías</th>
                                            <td>
                                                @if($patient->cardiopathy == 1)
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nefropatías</th>
                                            <td>
                                                @if($patient->nephropathy == 1)
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Hepatopatías</th>
                                            <td>
                                                @if($patient->hepatopathy == 1)
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Neumopatías</th>
                                            <td>
                                                @if($patient->pneumopathy == 1)
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Cáncer</th>
                                            <td>
                                                @if($patient->cancer == 1)
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Enfermedades Mentales</th>
                                            <td>
                                                @if($patient->mental_diseases == 1)
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Enfermedades Alérgicas</th>
                                            <td>
                                                @if($patient->allergic_diseases == 1)
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Enfermedades Endócrinas</th>
                                            <td>
                                                @if($patient->endocrine_diseases == 1)
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Otras</th>
                                            <td>{{ $patient->others_family_background }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        
                            <div class="tab-pane" id="tab4" disabled="disabled">

                                <hr>

                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Enfermedades</th>
                                            <td>{{ $patient->diseases }}</td>
                                        </tr>
                                        <tr>
                                            <th>Cirugías Previas</th>
                                            <td>{{ $patient->previous_surgery }}</td>
                                        </tr>
                                        <tr>
                                            <th>Hospitalizaciones</th>
                                            <td>{{ $patient->hospitalizations }}</td>
                                        </tr>
                                        <tr>
                                            <th>Traumas</th>
                                            <td>{{ $patient->traumas }}</td>
                                        </tr>
                                        <tr>
                                            <th>Alérgias</th>
                                            <td>{{ $patient->allergies }}</td>
                                        </tr>
                                        <tr>
                                            <th>Transfusiones</th>
                                            <td>{{ $patient->transfusions }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tabaquismo</th>
                                            <td>{{ $patient->smoking }}</td>
                                        </tr>
                                        <tr>
                                            <th>Alcoholismo</th>
                                            <td>{{ $patient->alcoholism }}</td>
                                        </tr>
                                        <tr>
                                            <th>Toxicomanías</th>
                                            <td>{{ $patient->addictions }}</td>
                                        </tr>
                                        <tr>
                                            <th>Inmunizaciones</th>
                                            <td>{{ $patient->immunizations }}</td>
                                        </tr>
                                        <tr>
                                            <th>Otros</th>
                                            <td>{{ $patient->others_personal_history }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        
                            <div class="tab-pane" id="tab5" disabled="disabled">

                                <hr>

                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Menarca</th>
                                            <td>{{ $patient->menarca }}</td>
                                        </tr>
                                        <tr>
                                            <th>Ritmo Menstrual</th>
                                            <td>{{ $patient->menstrual_rhythm }}</td>
                                        </tr>
                                        <tr>
                                            <th>G</th>
                                            <td>
                                                @if($patient->g == 1)
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>P</th>
                                            <td>
                                                @if($patient->p == 1)
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>A</th>
                                            <td>
                                                @if($patient->a == 1)
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>C</th>
                                            <td>
                                                @if($patient->c == 1)
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>FUM</th>
                                            <td>{{ $patient->fum }}</td>
                                        </tr>
                                        <tr>
                                            <th>FPP</th>
                                            <td>{{ $patient->fpp }}</td>
                                        </tr>
                                        <tr>
                                            <th>Menopausia</th>
                                            <td>{{ $patient->menopause }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        
                            <div class="tab-pane" id="tab6" disabled="disabled">

                                <hr>

                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Sistema Cardiovascular</th>
                                            <td>{{ $patient->cardiovascular_system }}</td>
                                        </tr>
                                        <tr>
                                            <th>Sistema Digestivo</th>
                                            <td>{{ $patient->digestive_system }}</td>
                                        </tr>
                                        <tr>
                                            <th>Sistema Respiratorio</th>
                                            <td>{{ $patient->respiratory_system }}</td>
                                        </tr>
                                        <tr>
                                            <th>Sistema Genitourinario</th>
                                            <td>{{ $patient->genitourinary_system }}</td>
                                        </tr>
                                        <tr>
                                            <th>Sistema Linfohemático</th>
                                            <td>{{ $patient->lymphatic_system }}</td>
                                        </tr>
                                        <tr>
                                            <th>Sistema Endócrino</th>
                                            <td>{{ $patient->endocrine_system }}</td>
                                        </tr>
                                        <tr>
                                            <th>Sistema Osteomioarticular</th>
                                            <td>{{ $patient->osteomyoarticular_system }}</td>
                                        </tr>
                                        <tr>
                                            <th>Sistema Nervioso</th>
                                            <td>{{ $patient->nervous_system }}</td>
                                        </tr>
                                        <tr>
                                            <th>Sistema Tegumentario</th>
                                            <td>{{ $patient->integumentary_system }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <ul class="pager wizard">
                                <li class="previous"><a href="#">Anterior</a></li>
                                <li class="next"><a href="#">Siguiente</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('assets/js/show-patient.js') !!}
@endsection

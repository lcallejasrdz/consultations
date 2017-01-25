<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel</title>

    <!-- Bootstrap Core CSS -->
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css') !!}

    <!-- Custom CSS -->
    {!! Html::style('css/sb-admin.css') !!}

    <!-- Morris Charts CSS -->
    {!! Html::style('css/plugins/morris.css') !!}

    <!-- Custom Fonts -->
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css') !!}
    {!! Html::style('https://fonts.googleapis.com/css?family=Lato:100,300,400,700') !!}

    <!-- DataTables -->
    {!! Html::style('https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css') !!}

    <!-- jQueryUi -->
    {!! Html::style('https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css') !!}

    <!-- Custom -->
    @yield('styles')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{!! URL::to('/admin') !!}">Laravel</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <!--
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{!! URL::to('/admin/user/'.Auth::user()->id) !!}"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{!! URL::to('/logout') !!}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <!-- Home -->
                    <li class="active">
                        <a href="{!! URL::to('/admin') !!}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <!-- Users -->
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#usersdropdown"><i class="fa fa-fw fa-user"></i> Usuarios <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="usersdropdown" class="collapse">
                            <li>
                                <a href="{!! URL::to('/admin/user/create') !!}"><i class="fa fa-fw fa-user-plus"></i> Agregar Usuario</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/user') }}"><i class="fa fa-fw fa-users"></i> Lista de Usuarios</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/user/deleted') }}"><i class="fa fa-fw fa-user-times"></i> Usuarios Eliminados</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Patients -->
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#patientsdropdown"><i class="fa fa-fw fa-user"></i> Pacientes <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="patientsdropdown" class="collapse">
                            <li>
                                <a href="{!! URL::to('/admin/patient/create') !!}"><i class="fa fa-fw fa-user-plus"></i> Agregar Paciente</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/patient') }}"><i class="fa fa-fw fa-users"></i> Lista de Paciente</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/patient/deleted') }}"><i class="fa fa-fw fa-user-times"></i> Paciente Eliminados</a>
                            </li>
                        </ul>
                    </li>
                    <!--
                    <li>
                        <a href="#"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                    -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
                @include('admin.modals.delete')
                
                @yield('head')

                @include('alerts.errors')
                @include('alerts.success')
                
                @yield('content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js') !!}

    <!-- Bootstrap Core JavaScript -->
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js') !!}

    <!-- DataTables -->
    {!! Html::script('https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js') !!}
    {!! Html::script('https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.js') !!}

    <!-- jQueryUi -->
    {!! Html::script('https://code.jquery.com/ui/1.12.1/jquery-ui.js') !!}

    <!-- Wizard -->
    {!! Html::script('js/jquery.bootstrap.wizard.min.js') !!}

    <!-- Validator -->
    {!! Html::script('js/formValidation.min.js') !!}
    {!! Html::script('js/framework/bootstrap.min.js') !!}

    <!-- Plugins -->
    {!! Html::script('js/plugins.js') !!}

    <!-- Custom -->
    @yield('scripts')

    {!! Html::script('js/functions_calc.js') !!}

    <!-- Morris Charts JavaScript -->
    {!! Html::script('js/plugins/morris/raphael.min.js') !!}
    {!! Html::script('js/plugins/morris/morris.min.js') !!}
    {!! Html::script('js/plugins/morris/morris-data.js') !!}

</body>

</html>

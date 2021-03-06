
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Dashboard | Sistema de Inventarios Awesome Media</title>

    <!--=== CSS ===-->
    {{--{{ asset('bootstrap/css/bootstrap.min.css')}}--}}
    <!-- Bootstrap -->
    <link href="{{ asset('melon/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- jQuery UI -->
    <!--<link href="{{ asset('melon/plugins/jquery-ui/jquery-ui-1.10.2.custom.css') }}" rel="stylesheet" type="text/css" />-->
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="{{ asset('melon/plugins/jquery-ui/jquery.ui.1.10.2.ie.css') }}"/>
    <![endif]-->

    <!-- Theme -->
    <link href="{{ asset('melon/css/main.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('melon/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('melon/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('melon/css/icons.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('melon/css/fontawesome/font-awesome.min.css') }}">
    <!--[if IE 7]>
    <link rel="stylesheet" href="{{ asset('melon/css/fontawesome/font-awesome-ie7.min.css') }}">
    <![endif]-->

    <!--[if IE 8]>
    <link href="{{asset('melon/css/ie8.css')}}" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

    @if(isset($styles) && sizeof($styles) && is_array($styles))
        @foreach($styles as $css)
            <link rel="stylesheet" href="{{asset($css)}}">
        @endforeach
    @endif

    <!--=== JavaScript ===-->

    <script type="text/javascript" src="{{ asset('melon/js/libs/jquery-1.10.2.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('melon/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('melon/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/js/libs/lodash.compat.min.js') }}"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="{{ asset('melon/js/libs/html5shiv.js') }}"></script>
    <![endif]-->

    <!-- Smartphone Touch Events -->
    <script type="text/javascript" src="{{ asset('melon/plugins/touchpunch/jquery.ui.touch-punch.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/plugins/event.swipe/jquery.event.move.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/plugins/event.swipe/jquery.event.swipe.js') }}"></script>

    <!-- General -->
    <script type="text/javascript" src="{{ asset('melon/js/libs/breakpoints.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/plugins/respond/respond.min.js') }}"></script> <!-- Polyfill for min/max-width CSS3 Media Queries (only for IE8) -->
    <script type="text/javascript" src="{{ asset('melon/plugins/cookie/jquery.cookie.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/plugins/slimscroll/jquery.slimscroll.horizontal.min.js') }}"></script>

    <!-- Page specific plugins -->
    <!-- Charts -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{ asset('melon/plugins/flot/excanvas.min.js') }}"></script>
    <![endif]-->
    <script type="text/javascript" src="{{ asset('melon/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/plugins/flot/jquery.flot.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/plugins/flot/jquery.flot.resize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/plugins/flot/jquery.flot.time.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/plugins/flot/jquery.flot.growraf.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/plugins/easy-pie-chart/jquery.easy-pie-chart.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('melon/plugins/daterangepicker/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/plugins/blockui/jquery.blockUI.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('melon/plugins/fullcalendar/fullcalendar.min.js') }}"></script>

    <!-- Noty -->
    <script type="text/javascript" src="{{ asset('melon/plugins/noty/jquery.noty.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/plugins/noty/layouts/top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/plugins/noty/themes/default.js') }}"></script>

    <!-- Forms -->
    <script type="text/javascript" src="{{ asset('melon/plugins/uniform/jquery.uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/plugins/select2/select2.min.js') }}"></script>

    <!-- App -->
    <script type="text/javascript" src="{{ asset('melon/js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/js/plugins.form-components.js') }}"></script>

    @if(isset($javascripts) && sizeof($javascripts) && is_array($javascripts))
        @foreach($javascripts as $js)
            <script type="text/javascript" src="{{asset($js)}}"></script>
        @endforeach
    @endif

    @yield('scripts')

    <script>
        $(document).ready(function(){
            "use strict";

            App.init(); // Init layout and core plugins
            Plugins.init(); // Init all plugins
            FormComponents.init(); // Init all form-specific plugins
        });
    </script>

    <!-- Demo JS -->
    <script type="text/javascript" src="{{ asset('melon/js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/js/demo/pages_calendar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/js/demo/charts/chart_filled_blue.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/js/demo/charts/chart_simple.js') }}"></script>
</head>

<body>

<!-- Header -->
<header class="header navbar navbar-fixed-top" role="banner">
    <!-- Top Navigation Bar -->
    <div class="container">

        <!-- Only visible on smartphones, menu toggle -->
        <ul class="nav navbar-nav">
            <li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="icon-reorder"></i></a></li>
        </ul>

        <!-- Logo -->
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset('melon/img/logo.png')}}" alt="logo" />
            <strong>ME</strong>LON
        </a>
        <!-- /logo -->

        <!-- Sidebar Toggler -->
        <a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom" data-original-title="Toggle navigation">
            <i class="icon-reorder"></i>
        </a>
        <!-- /Sidebar Toggler -->

        <!-- Top Left Menu -->
        <ul class="nav navbar-nav navbar-left hidden-xs hidden-sm">
            <li>
                <a href="#">
                    Mi Resumen
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Inventario
                    <i class="icon-caret-down small"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('product') }}"><i class="icon-user"></i> Mis Productos</a></li>
                    <li><a href="#"><i class="icon-calendar"></i> Mis Clientes</a></li>
                    <li><a href="#"><i class="icon-calendar"></i> Mis Proveedores</a></li>
                    <li><a href="#"><i class="icon-calendar"></i> Mis Empleados</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-tasks"></i> Venta</a></li>
                    <li><a href="#"><i class="icon-tasks"></i> Compra</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-tasks"></i> Informes</a></li>
                </ul>
            </li>
        </ul>
        <!-- /Top Left Menu -->

        <!-- Top Right Menu -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Notifications -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-warning-sign"></i>
                    <span class="badge">5</span>
                </a>
                <ul class="dropdown-menu extended notification">
                    <li class="title">
                        <p>Tienes 5 notificaciones</p>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="label label-success"><i class="icon-plus"></i></span>
                            <span class="message">New user registration.</span>
                            <span class="time">1 mins</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="label label-danger"><i class="icon-warning-sign"></i></span>
                            <span class="message">High CPU load on cluster #2.</span>
                            <span class="time">5 mins</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="label label-success"><i class="icon-plus"></i></span>
                            <span class="message">New user registration.</span>
                            <span class="time">10 mins</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="label label-info"><i class="icon-bullhorn"></i></span>
                            <span class="message">New items are in queue.</span>
                            <span class="time">25 mins</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="label label-warning"><i class="icon-bolt"></i></span>
                            <span class="message">Disk space to 85% full.</span>
                            <span class="time">55 mins</span>
                        </a>
                    </li>
                    <li class="footer">
                        <a href="javascript:void(0);">View all notifications</a>
                    </li>
                </ul>
            </li>
            <!-- Project Switcher Button -->
            <li class="dropdown">
                <a href="#" class="project-switcher-btn dropdown-toggle">
                    <i class="icon-folder-open"></i>
                    <span>Recursos</span>
                </a>
            </li>

            <!-- User Login Dropdown -->
            <li class="dropdown user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <!--<img alt="" src="{{ asset('melon/img/avatar1_small.jpg') }}" />-->
                    <i class="icon-male"></i>
                    <span class="username">{{ Auth::user()->full_name }}</span>
                    <i class="icon-caret-down small"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="pages_user_profile.html"><i class="icon-user"></i> Mi Perfil</a></li>
                    {{--<li><a href="pages_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>--}}
                    {{--<li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>--}}
                    <li class="divider"></li>
                    <li><a href="{{ route('logout') }}"><i class="icon-key"></i> Log Out</a></li>
                </ul>
            </li>
            <!-- /user login dropdown -->
        </ul>
        <!-- /Top Right Menu -->
    </div>
    <!-- /top navigation bar -->

    <!--=== Project Switcher ===-->
    <div id="project-switcher" class="container project-switcher">
        <div id="scrollbar">
            <div class="handle"></div>
        </div>

        <div id="frame">
            <ul class="project-list">
                <li>
                    <a href="javascript:void(0);">
                        <span class="image"><i class="icon-desktop"></i></span>
                        <span class="title">Productos</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="image"><i class="icon-compass"></i></span>
                        <span class="title">Categorías de Productos</span>
                    </a>
                </li>
                <li class="current">
                    <a href="javascript:void(0);">
                        <span class="image"><i class="icon-male"></i></span>
                        <span class="title">Clientes</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="image"><i class="icon-thumbs-up"></i></span>
                        <span class="title">Empleados</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="image"><i class="icon-female"></i></span>
                        <span class="title">Proveedores</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="image"><i class="icon-beaker"></i></span>
                        <span class="title">Operaciones de Compras</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="image"><i class="icon-desktop"></i></span>
                    </a>
                        <span class="title">Operaciones de Ventas</span>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="image"><i class="icon-compass"></i></span>
                        <span class="title">Informes de Compras</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="image"><i class="icon-male"></i></span>
                        <span class="title">Informes de Ventas</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="image"><i class="icon-thumbs-up"></i></span>
                        <span class="title">Sed diam nonumy</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="image"><i class="icon-female"></i></span>
                        <span class="title">Ayuda</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="image"><i class="icon-beaker"></i></span>
                        <span class="title">Contactos</span>
                    </a>
                </li>
            </ul>
        </div> <!-- /#frame -->
    </div> <!-- /#project-switcher -->
</header> <!-- /.header -->

<div id="container">
    <div id="sidebar" class="sidebar-fixed">
        <div id="sidebar-content">

            <!-- Search Input -->
            <form class="sidebar-search">
                <div class="input-box">
                    <button type="submit" class="submit">
                        <i class="icon-search"></i>
                    </button>
						<span>
							<input type="text" placeholder="Buscar...">
						</span>
                </div>
            </form>

            <!-- Search Results -->
            <div class="sidebar-search-results">
                <i class="icon-remove close"></i>
                <!-- Documents -->
                <div class="title">
                    Documentos
                </div>
                <ul class="notifications">
                    <li>
                        <a href="javascript:void(0);">
                            <div class="col-left">
                                <span class="label label-info"><i class="icon-file-text"></i></span>
                            </div>
                            <div class="col-right with-margin">
                                <span class="message"><strong>John Doe</strong> received $1.527,32</span>
                                <span class="time">finances.xls</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <div class="col-left">
                                <span class="label label-success"><i class="icon-file-text"></i></span>
                            </div>
                            <div class="col-right with-margin">
                                <span class="message">My name is <strong>John Doe</strong> ...</span>
                                <span class="time">briefing.docx</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /Documents -->
                <!-- Persons -->
                <div class="title">
                    Persons
                </div>
                <ul class="notifications">
                    <li>
                        <a href="javascript:void(0);">
                            <div class="col-left">
                                <span class="label label-danger"><i class="icon-female"></i></span>
                            </div>
                            <div class="col-right with-margin">
                                <span class="message">Jane <strong>Doe</strong></span>
                                <span class="time">21 years old</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div> <!-- /.sidebar-search-results -->

            <!--=== Navigation ===-->
            <ul id="nav">
                <li class="current">
                    <a href="index.html">
                        <i class="icon-dashboard"></i>
                        RESUMEN
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="icon-building"></i>
                        Inventario
                        {{--<span class="label label-info pull-right">6</span>--}}
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="javascript:void(0);">
                                <i class="icon-list"></i>
                                Productos
                            </a>
                            <ul class="sub-menu">
                                <li >
                                    <a href="{{ route('products') }}">
                                        <i class="icon-list-alt"></i>
                                        Todos los productos
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('product_add') }}">
                                        <i class="icon-save"></i> Agregar producto
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);">
                                <i class="icon-table"></i>
                                Categorias
                            </a>
                            <ul class="sub-menu">
                                <li class="closed-default">
                                    <a href="{{ route('products_categories') }}">
                                        <i class="icon-list-alt"></i>
                                        Todos las categorías
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('product_category_add') }}">
                                        <i class="icon-save"></i> Agregar categoría
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="icon-group"></i>
                        Personal
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="form_components.html">
                                <i class="icon-user"></i>
                                Clientes
                            </a>
                        </li>
                        <li>
                            <a href="form_layouts.html">
                                <i class="icon-user"></i>
                                Empleados
                            </a>
                        </li>
                        <li>
                            <a href="form_validation.html">
                                <i class="icon-building"></i>
                                Proveedores
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="icon-money"></i>
                        Operaciones
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ route('make_sale') }}">
                                <i class="icon-hand-right"></i>
                                Ventas
                            </a>
                        </li>
                        <li>
                            <a href="tables_dynamic.html">
                                <i class="icon-hand-left"></i>
                                Compras
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="icon-table"></i>
                        Informes
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ route('make_sale') }}">
                                <i class="icon-angle-right"></i>
                                Ventas
                            </a>
                        </li>
                        <li>
                            <a href="tables_dynamic.html">
                                <i class="icon-angle-right"></i>
                                Compras
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- /Navigation -->
            <div class="sidebar-title">
                <span>Notifications</span>
            </div>
            <ul class="notifications demo-slide-in"> <!-- .demo-slide-in is just for demonstration purposes. You can remove this. -->
                <li style="display: none;"> <!-- style-attr is here only for fading in this notification after a specific time. Remove this. -->
                    <div class="col-left">
                        <span class="label label-danger"><i class="icon-warning-sign"></i></span>
                    </div>
                    <div class="col-right with-margin">
                        <span class="message">Server <strong>#512</strong> crashed.</span>
                        <span class="time">few seconds ago</span>
                    </div>
                </li>
                <li style="display: none;"> <!-- style-attr is here only for fading in this notification after a specific time. Remove this. -->
                    <div class="col-left">
                        <span class="label label-info"><i class="icon-envelope"></i></span>
                    </div>
                    <div class="col-right with-margin">
                        <span class="message"><strong>John</strong> sent you a message</span>
                        <span class="time">few second ago</span>
                    </div>
                </li>
                <li>
                    <div class="col-left">
                        <span class="label label-success"><i class="icon-plus"></i></span>
                    </div>
                    <div class="col-right with-margin">
                        <span class="message"><strong>Emma</strong>'s account was created</span>
                        <span class="time">4 hours ago</span>
                    </div>
                </li>
            </ul>

            <div class="sidebar-widget align-center">
                <div class="btn-group" data-toggle="buttons" id="theme-switcher">
                    <label class="btn active">
                        <input type="radio" name="theme-switcher" data-theme="bright"><i class="icon-sun"></i> Bright
                    </label>
                    <label class="btn">
                        <input type="radio" name="theme-switcher" data-theme="dark"><i class="icon-moon"></i> Dark
                    </label>
                </div>
            </div>

        </div>
        <div id="divider" class="resizeable"></div>
    </div>
    <!-- /Sidebar -->

    <div id="content">
        <div class="container">
            <!-- Breadcrumbs line -->
            <div class="crumbs">
                <ul id="breadcrumbs" class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="{{ route('home') }}">Dashboard</a>
                    </li>
                    {{--<li class="current">--}}
                        {{--<a href="pages_calendar.html" title="">Calendar</a>--}}
                    {{--</li>--}}
                </ul>

                <ul class="crumb-buttons">
                    <li><a href="charts.html" title=""><i class="icon-signal"></i><span>Statistics</span></a></li>
                    <li class="dropdown"><a href="#" title="" data-toggle="dropdown"><i class="icon-tasks"></i><span>Usuarios <strong>(+3)</strong></span><i class="icon-angle-down left-padding"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="form_components.html" title=""><i class="icon-plus"></i>Agregar Nuevo Usuario</a></li>
                            <li><a href="tables_dynamic.html" title=""><i class="icon-reorder"></i>Overview</a></li>
                        </ul>
                    </li>
                    <li class="range"><a href="#">
                            <i class="icon-calendar"></i>
                            <span></span>
                            <i class="icon-angle-down"></i>
                        </a></li>
                </ul>
            </div>
            <!-- /Breadcrumbs line -->

            @include('themes.melon.commons.header')

            <!--=== Page Content ===-->

            <!--=== Blue Chart ===-->
            <div class="row">
               @yield('content')
            </div> <!-- /.row -->
            <!-- /Blue Chart -->

            <div class="row">

            </div> <!-- /.row -->
            <!-- /Page Content -->
        </div>
        <!-- /.container -->

    </div>
</div>

</body>
</html>
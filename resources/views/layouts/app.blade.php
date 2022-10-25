
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title')</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">
<script nonce="2e727245-5785-441b-9835-74aa02112b17">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]},a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
<nav class="main-header navbar navbar-expand navbar-light">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
<li class="nav-item d-none d-sm-inline-block">
    <a href="{{ route('home') }}" class="nav-link">ACCUEIL</a>
    </li>
</ul>
<ul class="navbar-nav ml-auto">
    <li class="nav-item">
    </li>
</ul>
<ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <div class="div_se_lo"><a href="" title="Ministère du Commerce et du développement des Exportations"><img src="images/logo.gif" alt="Ministère du Commerce et du développement des Exportations" title="Ministère du Commerce et du développement des Exportations" /></a>
    </li>       
</ul>
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="nav-link" data-widget="navbar-search" href="#" role="button">
<i class="fas fa-search"></i>
</a>
<div class="navbar-search-block">
<form class="form-inline">
<div class="input-group input-group-sm">
<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-navbar" type="submit">
<i class="fas fa-search"></i>
</button>
<button class="btn btn-navbar" type="button" data-widget="navbar-search">
<i class="fas fa-times"></i>
</button>
</div>
</div>
</form>
</div>
</li>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="fullscreen" href="#" role="button">
<i class="fas fa-expand-arrows-alt"></i>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
<i class="fas fa-th-large"></i>
</a>
</li>
<div >
        <button class="btn btn-secondary " href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">       
            {{ __('Déconnexion') }}
    </button>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
</ul>
</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="" class="brand-link">
        
        </a>
<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="images\util.png" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<div> <a href="" class="text-center ">{{ Auth::user()->name}} </a ></div>
</div>
</div>

<div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div>

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
        <a href="{{ route('home') }}" class="nav-link">
        <i class="nav-icon fas fa-home"></i>
        <p>
        Accueil
        </p>
        </a>
        </li>

<li class="nav-item">
<a href="{{ route('dossiers.index') }}" class="nav-link">
<i class="nav-icon fas fa-folder-open"></i>
<p>
Dossiers
</p>
</a>
</li>

<li class="nav-item">
    <a href="{{ route('demandes.index') }}" class="nav-link">
    <i class="nav-icon fas fa-edit"></i>
    <p>
    Demandes
    </p>
    </a>
    </li>


<li class="nav-item">
<a href="" class="nav-link">
<i class="nav-icon fas fa-chart-pie"></i>
<span class="badge badge-info right">4</span>
<p>
Statistiques
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="pages/charts/chartjs.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>ChartJS</p>
</a>
</li>
<li class="nav-item">
<a href="pages/charts/flot.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Flot</p>
</a>
</li>
<li class="nav-item">
<a href="pages/charts/inline.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Inline</p>
</a>
</li>
<li class="nav-item">
<a href="pages/charts/uplot.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>uPlot</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-lightbulb"></i>
<p>
Privilèges
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="pages/UI/general.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>General</p>
</a>
</li>
<li class="nav-item">
<a href="pages/UI/icons.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Icons</p>
</a>
</li>
<li class="nav-item">
<a href="pages/UI/buttons.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Buttons</p>
</a>
</li>
<li class="nav-item">
<a href="pages/UI/sliders.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Sliders</p>
</a>
</li>
<li class="nav-item">
<a href="pages/UI/modals.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Modals & Alerts</p>
</a>
</li>
<li class="nav-item">
<a href="pages/UI/navbar.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Navbar & Tabs</p>
</a>
</li>
<li class="nav-item">
<a href="pages/UI/timeline.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Timeline</p>
</a>
</li>
<li class="nav-item">
<a href="pages/UI/ribbons.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Ribbons</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="" class="nav-link">
<i class="nav-icon fas fa-users"></i>
<p>
Utilisateurs
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="{{ route('users.index') }}" class="nav-link">
<i class="fas fa-list nav-icon"></i>
<p>Liste des utlisateurs</p>
</a>
</li>
<li class="nav-item">
<a href="{{ route('users.create') }}" class="nav-link">
<i class="fas fa-plus nav-icon"></i>
<p>Ajouter un utlisateur</p>
</a>
</li>
 <li class="nav-item">
<a href="{{ route('users.index') }}" class="nav-link">
<i class="fas fa-pen nav-icon"></i>
<p>Modifier un utilisateur</p>
</a>
</li>
<li class="nav-item">
<a href="{{ route('users.index') }}" class="nav-link">
<i class="fas fa-trash nav-icon"></i>
<p>Supprimer un utlisateur</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-cog   "></i>
<p>
    Paramètres
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="pages/tables/simple.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Simple Tables</p>
</a>
</li>
<li class="nav-item">
<a href="pages/tables/data.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>DataTables</p>
</a>
</li>
<li class="nav-item">
<a href="pages/tables/jsgrid.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>jsGrid</p>
</a>
</li>
</ul>
</li>

</ul>
</nav>

</div>

</aside>

<div class="content-wrapper">
@yield('content')

</div>


<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>



<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>




<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.js?v=3.2.0"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="plugins/sparklines/sparkline.js"></script>
<script src="dist/js/demo.js"></script>
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="dist/js/pages/dashboard3.js"></script>
<script src="dist/js/adminlte.js"></script>

</body>
</html>


 
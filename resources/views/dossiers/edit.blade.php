<!DOCTYPE html>
<html lang="en">
<head>  
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Page de Modification</title>
<link rel="stylesheet" href="{{ mix("css/app.css") }}">
<link rel="stylesheet" href="{{asset('css/form.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">
<script nonce="2e727245-5785-441b-9835-74aa02112b17">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]},a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script>
</head>
<body>
  <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">Modifier le dossier</h2>
            </div>
            <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
       <form action="{{ route('dossiers.update' , $dossier->id) }}" method="post">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" id="id" value="{{$dossier->id}}" id="id" />
        <label>Nom ou Raison sociale</label><br>
        <input type="text" name="dossier_name" id="dossier_name" value="{{$dossier->dossier_name}}" class="form-control"><br>
        <label>Forme Juridique</label><br>
        <input type="text" name="dossier_type" id="dossier_type" value="{{$dossier->dossier_type}}" class="form-control"><br>
        <label>Date de constituation</label><br>
        <input type="date" name="dossier_date_of_constitution" id="dossier_date_of_constitution" value="{{$dossier->dossier_date_of_constitution}}" class="form-control"><br>
        <label>Adresse</label><br>
        <input type="text" name="dossier_adress" id="dossier_adress" value="{{$dossier->dossier_adress}}" class="form-control"><br>
        <label>Pays</label><br>
        <input type="text" name="dossier_country" id="dossier_country" value="{{$dossier->dossier_country}}" class="form-control"><br>
        <label>Type d'activité</label><br>
        <input type="text" name="dossier_type_of_activity" id="dossier_type_of_activity" value="{{$dossier->dossier_type_of_activity}}" class="form-control"><br>
        <label>Activité solicitée</label><br>
        <input type="text" name="dossier_activity" id="dossier_activity" value="{{$dossier->dossier_activity}}" class="form-control"><br>
        <label>Adresse des agences</label><br>
        <input type="text" name="dossier_branch_addresses" id="dossier_branch_addresses" value="{{$dossier->dossier_branch_addresses}}" class="form-control"><br>
        <label>Télephone</label><br>
        <input type="text" name="dossier_phone_number" id="dossier_phone_number" value="{{$dossier->dossier_phone_number}}" class="form-control"><br>
        <label>Fax</label><br>
        <input type="text" name="dossier_fax_number" id="dossier_fax_number" value="{{$dossier->dossier_fax_number}}" class="form-control"><br>
        <label>Mobile</label><br>
        <input type="text" name="dossier_mobile_number" id="mobile" value="{{$dossier->dossier_mobile_number}}" class="form-control"><br>
        <label>Représentant légal</label><br>
        <input type="text" name="dossier_legal_representative_name" id="dossier_legal_representative_name" value="{{$dossier->dossier_legal_representative_name}}" class="form-control"><br>
        <input type="submit" value="Mettre à jour " class="btn btn-success"><br>
    </form>
  
  </div>
</div>

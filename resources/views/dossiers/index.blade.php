@extends('layouts.doss')
@section('title',' Gestion Des Dossiers')
@section('content')

    <div class="container">
        <div class="row">
            <div  class="col-md-12">
                <div class="card">
                    <div class="card-header"><div class="text-center text-secondary"><h3 class="font-weight"></h3></div>
                    <div class="card-body">
                        <div class="row align-items-start">
                            <div class="col">
                                <a href="{{ route('dossiers.create') }}" class="btn btn-success" title="Ajouter un Dossier">
                                    <i class="fa fa-plus" aria-hidden="true"></i>  Nouveau
                                </a>              
                             </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="form-inline">
                                    <form class="" action="" method="GET" role="search">
                                        @csrf
                                    <div class="input-group" data-widget="">  
                                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                                    <div class="input-group-append">
                                    <button class="btn btn-info">
                                    <i class="fas fa-search fa-fw"></i>
                                    </button>
                                    </div>
                                    </div>
                                    </div>
                                </div>            
                        </div>
                        <br/> 
                        <div class="table-responsive table-hover table-bordered ">
                            <table class="table">
                                <thead class="table-secondary">
                                    <tr>
                                        <th> <div class="text-center">#</div></th>
                                        <th> <div class="text-center">Nom ou Raison sociale</th>
                                        <th> <div class="text-center">Type </div></th>
                                        <th> <div class="text-center">Type d'activité </div></th>
                                        <th> <div class="text-center">Pays </div></th>
                                        <th> <div class="text-center">Représentant légal </div></th>
                                        <th> <div class="text-center">Actions </div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $value)  
                                    <tr>
                                        <td>{{  ++$i  }}</td>
                                        <td>{{ $value->dossier_name }}</td>
                                        <td>{{ $value->dossier_type }}</td>
                                        <td>{{ $value->dossier_type_of_activity }}</td>
                                        <td>{{ $value->dossier_country}}</td>
                                        <td>{{ $value->dossier_legal_representative_name }}</td>

                                        <td>
                                            <div class="btn-group btn-group-sm" role="12.2rem" aria-label="...">
                                             <a href="{{ route('dossiers.edit', $value->id) }}" title="Modifier le Dossier"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button></a>
                                             <a href ="{{ route('dossiers.show',$value->id) }}" title="Plus de Détails"><button class="btn btn-secondary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                             <form action="{{ route('dossiers.destroy',$value->id) }}" method="POST"> 
                                            @method('DELETE')
                                            @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" title="Supprimer le Dossier" onclick="return confirm(&quot;êtes vous sur de supprimer ce dossier?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                            </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
        {!! $data->links() !!} 

    </div>
    
@endsection
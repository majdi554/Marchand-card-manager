@extends('layouts.auth')
@section('title',' Détails du dossier')
@section('container')
<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <span class="login100-form-title">
          <div  class="position-absolute top-0 start-50 translate-middle-x">
              <br> <br> &nbsp;  
            </div>

            <div class="text-center">
              <div class="form-group">
                <strong> Nom : </strong> {{ $dossier->dossier_name}}
              </div>
          </div> 
          
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
              <strong> Type : </strong>{{ $dossier->dossier_type }}
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
                <strong> Date de constitution :</strong> {{ $dossier->dossier_date_of_constitution }}
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                    <strong> Pays :</strong> {{ $dossier->dossier_country }}
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                        <strong> Type d'activité :</strong> {{ $dossier->dossier_type_of_activity }}
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                            <strong> Activité solicitée :</strong> {{ $dossier->dossier_activity }}
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                                <strong> Addresse :</strong> {{ $dossier->dossier_adress }}
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                    <strong> Addresse des agences :</strong> {{ $dossier->dossier_branch_addresses }}
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                  <div class="form-group">
                                        <strong> Numéro de téléphone :</strong> {{ $dossier->dossier_phone_number }}
                                      </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                            <strong> Fax :</strong> {{ $dossier->dossier_fax_number }}
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group">
                                                <strong> Mobile :</strong> {{ $dossier->dossier_mobile_number }}
                                              </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                              <div class="form-group">
                                                    <strong> Représentant légal :</strong> {{ $dossier->dossier_legal_representative_name }}
                                                  </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                  <div class="form-group">
                                                        <strong> Date de creation :</strong> {{ $dossier->created_at }}
                                                      </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                      <div class="form-group">
                                                            <strong> Derniére modification:</strong> {{ $dossier->updated_at }}
                                                          </div>
                                                        </div>
        </div>
        
            
          </span>
  
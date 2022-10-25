@extends('layouts.auth')
@section('title',' Détails du demande')
@section('container')
<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <span class="login100-form-title">
          <div  class="position-absolute top-0 start-50 translate-middle-x">
              <br> <br> &nbsp;  
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong> ID du dossier correspendant: </strong> {{ $demande->dossier_id}}
              </div>
          </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong> Type de la demande : </strong> {{ $demande->types_id}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                    <strong> Date de la demande :</strong> {{ $demande->date_demande }}
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                <strong> Motif de la demande : </strong>{{ $demande->motif_demande }}
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                  <strong> Avis de la commission :</strong> {{ $demande->avis_commission }}
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                      <strong> Date de commission :</strong> {{ $demande->date_commission }}
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                          <strong> Motif de la commission:</strong> {{ $demande->motif_commission}}
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                              <strong> Date de creation :</strong> {{ $demande->created_at }}
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                  <strong> Derniére modification:</strong> {{ $demande->updated_at }}
                                </div>
                              </div>
</div>
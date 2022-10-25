@extends('layouts.auth')
@section('title',' Détails utilisateur')
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
                <strong> Nom et prénom </strong> {{ $user->name}}
              </div>
          </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong> Rôle : </strong> {{ $user->role}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                    <strong> Télephone :</strong> {{ $user->telephone }}
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                <strong> Email : </strong>{{ $user->email }}
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                  <strong> Date de creation :</strong> {{ $user->created_at }}
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                      <strong> Derniére modification:</strong> {{ $user->updated_at }}
                    </div>
                  </div>
                  
</div>
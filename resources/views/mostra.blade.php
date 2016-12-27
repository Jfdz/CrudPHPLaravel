<!DOCTYPE html>
@extends('layouts.app')
@section('content')

  <div >
    <div class='container'>
      <div class='row'>
        <div class="col-sm-12">
            <h1 style="text-align:left;">
              Mostrar usuari - {{$persona->nom}}
            </h1>
            <p>Nom: {{$persona -> nom}}</p>

            <p>Cognoms: {{$persona -> cognom}}</p>

            <p>Email: {{$persona -> email}}</p>

            <div class="text-left">
            <a href="http://localhost/m7jesus/public/index" class="btn btn-success btn-md"><i class="fa fa-male" style="top: 2px;"></i>Atras</a>
            </div>
        </div>
      </div>
    </div>
  </div>


  <script src="http://localhost/m7jesus/public/media/js/jquery-1.12.1.min.js"></script>
  <script src="http://localhost/m7jesus/public/media/assets/bootstrap-3.3.6/js/bootstrap.min.js"></script>

  <script src="http://localhost/m7jesus/public/media/plugins/navbar/assets/js/navbar-portlet.js"></script>
  <script src="http://localhost/m7jesus/public/media/plugins/navbar/assets/sticky-1.0.3/jquery.sticky.min.js"></script>
  <script src="http://localhost/m7jesus/public/media/plugins/navbar/assets/js/jquery.easing.1.3.min.js"></script>
  <script src="http://localhost/m7jesus/public/media/plugins/navbar/assets/js/anchor-scroll.js"></script>
  <script src="http://localhost/m7jesus/public/media/plugins/row/assets/parallax.js-1.4.2/parallax.min.js"></script>
  @endsection

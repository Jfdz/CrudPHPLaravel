<!DOCTYPE html>
@extends('layouts.app')
@section('content')

  <div >
    <div class='container'>
      <div class='row'>
        <div class="col-sm-12">
            <h1 style="text-align:left;">
              Modificar usuari - {{$user->nom}}
            </h1>

          <form action="http://localhost/m7jesus/public/update/{{$user->id}}" method="POST">
            <div id="containForm">
            <div class="form-group"><label>Nom</label><input type="text"  name="name" class=" form-control" value="{{$user->nom}}">

            </div>
            <div class="form-group"><label>Cognom</label><input type="text" name="cognom" class=" form-control" value="{{$user->cognom}}">

            </div>
            <div class="form-group"><label>Email</label><input type="text"  name="email" class=" form-control" value="{{$user->email}}">
            </div>
          </div>
            <div class=" text-left" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{method_field('PUT')}}
                <div class="text-left">
              <input type="submit" name="submit" value="Editar !" class="btn btn-primary">

              <a href="http://localhost/m7jesus/public/index" class="btn btn-success btn-md"><i class="fa fa-male" style="top: 2px;"></i>Atras</a>
              </div>
            </div>
          </form>
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

<!DOCTYPE html>
@extends('layouts.app')
@section('content')

  <div >
    <div class='container'>
      <div class='row'>
        <div class="col-sm-12">
          <form action="store" method="POST">
            <h1 style="text-align:left;">
              Crear un nou registre
            </h1>
            <div class="form-group"><label>Nom</label><input  name="name" id="name" class=" form-control" required >
            </div>
            <div class="form-group"><label>Cognom</label><input  name="cognom" id="cognom" class=" form-control" required>
            </div>
            <div class="form-group"><label>Email</label><input  name="email" id="email" class=" form-control" required>
            </div>
            <!--SIN ESTO PETA-->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="text-left">
              <input type="submit" name="submit"  value="CREAR" class="btn btn-success btn-md">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <script src="media/js/jquery-1.12.1.min.js"></script>
  <script src="media/assets/bootstrap-3.3.6/js/bootstrap.min.js"></script>
  <script src="media/plugins/navbar/assets/js/navbar-portlet.js"></script>
  <script src="media/plugins/navbar/assets/sticky-1.0.3/jquery.sticky.min.js"></script>
  <script src="media/plugins/navbar/assets/js/jquery.easing.1.3.min.js"></script>
  <script src="media/plugins/navbar/assets/js/anchor-scroll.js"></script>
  <script src="media/plugins/row/assets/parallax.js-1.4.2/parallax.min.js"></script>
  @endsection

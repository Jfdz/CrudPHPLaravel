@extends('layouts.app')
@section('content')
  <div >
    <div class='container'>
      <div class='row'>
        <div class="col-sm-12">
          <div >
            <div class='container'>
              <div class='row'>
                <div class="col-sm-12">

                  <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Persones</div>
                    <div class="panel-body">
                      <p><div class=" text-left" >
                        <a class="btn btn-success btn-md" href="crear">Nou registre</a>
                      </div> </p>
                    </div>

                    <!-- Table -->
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>Cognom</th>
                          <th>Email</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($personas as $persona)
                        <tr>
                          <td>{{$persona-> nom}}</td>
                          <td>{{$persona-> cognom}}</td>
                          <td>{{$persona -> email}}</td>

                          <td>
                            <form method="POST" action="destroy/{{$persona->id}}">
                              {{method_field('DELETE')}}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" name="submit" value="Eliminar" class="btn btn-danger btn-md">
                            <a class="btn btn-primary" href="editar/{{$persona->id}}">Editar</a>
                            <a class="btn btn-success btn-md" href="show/{{$persona->id}}">Mostrar</a></td>
                            </form>
                          </tr>
                          @endforeach
                          </tbody>
                        </table>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
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

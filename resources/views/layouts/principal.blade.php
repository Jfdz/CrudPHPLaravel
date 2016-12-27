<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Crear</title>
  <!-- Style CSS -->
  <link href="media/assets/bootstrap-3.3.6/css/bootstrap.min.css" media="screen" rel="stylesheet">
  <link href="media/assets/font-awesome/css/font-awesome.min.css" media="screen" rel="stylesheet">

</head>
<body>
  <div>
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <span class="navbar-brand">
            <img style="width: 40px; height: 40px; margin-top: -5px; margin-right: 3px; float: left; display:none;" src="">
            Laravel PHP DAW2
            <span class="hidden-sm text-muted" style="font-size:13px;"></span>
          </span>
          <button data-target="#navbar-main" data-toggle="collapse" type="button" class="navbar-toggle">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar-main" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right"><li class="active"><a href="m7jesus/public/" class="bg-hover-color">Inici</a></li><li><a href="crear" class="bg-hover-color">Crear</a></li><li><a href="editar" class="bg-hover-color">Editar</a></li><li><a href="#" class="bg-hover-color">Mostrar</a></li><li><a href="#" class="bg-hover-color">Contact Us</a></li></ul>
        </div>
      </div>
    </div>
    <input type='hidden' id='bhb-navbar-scrollspy' value ='0'>
  </div>
  <div >
    <div class='container'>
      <div class='row'>
        <div class="col-sm-12">
          <form action="store" method="POST">
            <h1 style="text-align:left;">
              Crear un nou registre
            </h1>
            <div class="form-group"><label>Name</label><input  name="name" id="name" class=" form-control" >
            </div>
            <div class="form-group"><label>Cognom</label><input  name="cognom" id="cognom" class=" form-control" >
            </div>
            <div class="form-group"><label>Email</label><input  name="email" id="email" class=" form-control" >
            </div>
            <!--SIN ESTO PETA-->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class=" text-left" >
              <input type="submit" name="submit" id="Submit" value="CREAR">
            <!--<a hre class="btn btn-success btn-md"><i class="fa fa-male" style="top: 2px;"></i> Crear</a>-->
            </div>
          </form>
          <form action="show" method="POST">
            <h1 style="text-align:left;">
              Mostrar una persona
            </h1>
            <div class="form-group"><label>Nom</label><input  name="nomPersona" id="nomPersona" class="form-control"></div>
            <div class="form-group"><label>Cognom</label><input name="cognomPersona" id="cognomPersona" class="form-control"></div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class=" text-left" >
          <input type="submit" name="submit" id="submit" value="MOSTRAR">
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


</body>
</html>

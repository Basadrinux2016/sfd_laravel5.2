<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','default') | Panel de administración</title>
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
	<style type="text/css">
		
		.footer{
		  position: fixed;
		  bottom: 0px;
		  padding: 20px 15px;
		  height: 60px;
		  width: 100%;
		  display: block;
		  text-align: center;
		  background: #f5f5f5; 
		}
		.logo{
			width: 5%; /*Force IE10 and below to size SVG images correctly*/
			max-width: 5%;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    <a class="navbar-brand" href=""><img class="navbar-brand" src="{{ asset('images/yo.jpg') }}"></a>

	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        {{-- <li class="active"><a href="#">Inicio <span class="sr-only">(current)</span></a></li> --}}
	        <li><a href="#">Inicio</a></li>
	        <li><a href="{{ route('users.index') }}">Usuarios</a></li>
	        
	      </ul>
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Página Principal</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Basarinux 2016 <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Salir</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<section>
		<div class="panel panel-defaul">
			<div class="container spark-screen">
			    <div class="row">
			        <div class="col-md-10 col-md-offset-1">
			            <div class="panel panel-default">
			                <div class="panel-heading">
			    				<h3 class="panel-title">@yield('title','default')</h3>            	
			                </div>

			            </div>
			        </div>
			    </div>
			</div>

			<div class="panel-body">
				@include('flash::message')
				@yield('content')
			</div>
		</div>
		
	</section>

	
    <footer class="footer">
    	<p>Hecho por <a href="">Comunidad Basadrinux UNJBG</a> gracias a <a href="">Software freedoom day</a> </p>
	</footer>


	<script src="{{ asset('jquery/js/jquery-2.1.4.js') }}"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
	@yield('js')

</body>
</html>
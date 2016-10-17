<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>Sistema Integral de Gestión de Alumnos | S.I.G.A.</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="AELF-UCU Departamento de Informatica" name="author"/>

	<link href="{{ asset("assets/stylesheets/styles.css") }}" rel="stylesheet" type="text/css" />
	<link href="{{ URL::asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" >
	<link href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet">
	
  <script type="text/javascript" src="{{ URL::asset('js/vue.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery-2.2.3.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/bootstrap-paginator.js') }}"></script>

  <script src="//js.pusher.com/3.0/pusher.min.js"></script> 
  <script type="text/javascript" src="{{ URL::asset('js/Chart.min.js') }}"></script>
</head>
<body>
	@yield('body')

           
@stack('scripts')
</body>
<script type="text/javascript" src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/datepicker.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script type="text/javascript" src="{{ URL::asset('js/dropzone.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('js/semantic.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/sorttable.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jasny-bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset("assets/scripts/frontend.js") }}" ></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/registration.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/elements.css') }}">
    <style type="text/css">
    	body {background-color: lightblue;}
    </style>
</head>
<body>
	<h2>Colour 1</h2>
	<div id="hairColor" class="color-palette">
	  <ul>
	  	<?php $hair_colors = array('#F00', '#0F0', '#00F', '#FF0'); ?>
	  	@foreach($hair_colors as $color)
	    	<li style="background: {{$color}};"></li>
	    @endforeach
	  </ul>
	</div>
	<h2>Colour 2</h2>
	<div id="skinColor" class="color-palette">
	  <ul>
	    <li style="background: #fc4c4f;"></li>
	    <li style="background: #4fa3fc;"></li>
	    <li style="background: #ecd13f;"></li>
	  </ul>
	</div>
</body>
</html>

<script src="{{ asset('js/colorPalette.js') }}"></script>
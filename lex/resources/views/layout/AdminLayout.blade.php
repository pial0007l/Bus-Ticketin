<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
	{{ csrf_field() }}
	<title>Home - Bus</title>
	 <meta charset="utf-8">
  	 <meta name="viewport" content="width=device-width, initial-scale=1">
 	 <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
     <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
     <script type="text/javascript" src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js"></script>
     <script type="text/javascript" src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js"></script>
</head>
<body>
	<table border="0" width="100%">
		<tr>
			<td width="100"></td>
			<td align="center">
				<h2>Admin Home</h2>
			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td align="center">
				<hr/>
			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td align="center">
			<div class="w3-container">

			  <div class="w3-bar w3-light-grey">
			    <div class="w3-dropdown-hover">
			    <button class="w3-button">Settings</button>
			    <div class="w3-dropdown-content w3-bar-block w3-card-4">
				<a href="{{route('bushome.index')}}" class="w3-bar-item w3-button">Bus</a> 
				<a href="{{route('logout.index')}}" class="w3-bar-item w3-button">Log out</a> 

      </div></div></div></div>

			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td>
				<br/>
				<center>
				  @yield('content')
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>
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

     <style >
     /*	input[type="submit"]
    {
     background: #3399ff;
     border: 0;
     width: 250px;
     height: 40px;
     border-radius: 3px;
     color: white;
     position: absolute;
     top:165%;
     left:40%;
     border-radius:5px;
    }*/

    .p{
          background-color: lightgrey;
          border-bottom: 6px solid darkblue;
          width: 250px;
          height: 40px;
          border-radius: 3px;
      }

    .p1{

          min-height: 20px;
          padding: 19px;
          margin-bottom: 20px;
          background-color: #f5f5f5;
          border: 1px solid #e3e3e3;
          -webkit-border-radius: 4px;
          -moz-border-radius: 4px;
          border-radius: 4px;
          -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
          -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
          box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
       }
     </style>
</head>
<body>
	<table border="0" width="100%">
		<tr>
			<td width="100"></td>
			<td align="center">
				<h1>Bus Manager</h1>
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
			    <a href="{{route('adminhome.index')}}" class="w3-bar-item w3-button">Home</a>
			    <div class="w3-dropdown-hover">
			    <button class="w3-button">Settings</button>
			    <div class="w3-dropdown-content w3-bar-block w3-card-4">
				<a href="{{route('bushome.index')}}" class="w3-bar-item w3-button">Show All</a> 
				<a href="{{route('bushome.create')}}" class="w3-bar-item w3-button">Create</a> 
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
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
    <title>Home - Bus</title>
     @yield('content2')
   <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
     <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
     <script type="text/javascript" src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js"></script>
     <script type="text/javascript" src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js"></script>
   <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
     <script type="text/javascript"
                       src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
                      </script> 
                      <script type="text/javascript"
                       src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
                    </script>
                      <script type="text/javascript"
                       src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
                      </script>
                      <script type="text/javascript"
                      src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
                      </script>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

  
 body
    {
     background-image:url("travel.jpg");
     background-position:right-top;
     background-repeat:no-repeat;
     background-size:cover;
     background-attachment:fixed;
    }

input[type="submit"]
    {
     background: #3399ff;
     border: 0;
     width: 250px;
     height: 40px;
     border-radius: 3px;
     color: white;
     position: absolute;
     top:80%;
     left:40%;
     border-radius:5px;
    }

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
<table>
  <td>
    <tr>
<ul>
  <li><a href="{{route('homepage.index')}}">Home</a></li>
  <li><a href="{{route('login.index')}}"">Sign In</a></li>
  <li><a href="{{route('login.index')}}">Cancel ticket</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>
</tr>
</td>
</table>

        <center>
          @yield('content')
        </center>
      
</body>
</html>
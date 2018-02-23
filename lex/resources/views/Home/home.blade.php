@extends ('layout.homeLayout')
@section('content')
<table border="0" width="100%">
      <tr>
      <td width="100"></td>
      <td align="center">
        <h1>Home</h1>
      </td>
      <td width="100"></td> 
      </tr>
      <tr>
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
  <form method="post">
    {{csrf_field()}}
  <table border="0" align="center" width="60%">
   <tr>
    <td><tr>
    <td class="p">&nbsp;&nbsp;&nbsp;Leaving Form</td>
        <td class="p">&nbsp;&nbsp;&nbsp;Going To</td>
     </tr></td>
        <td><tr>
    <td class="p1"><input type="text" name="sourcelist" list="sourcelist">
                  <datalist id="sourcelist">
                    <option value="Dhaka">
                    <option value="Syllet">
                  </datalist></td>
        <td class="p1"><input type="text" name="destinationlist" list="destinationlist">
                  <datalist id="destinationlist">
                    <option value="Dhaka">
                    <option value="Syllet">
                  </datalist></td>
     </tr></td>
     </tr>
     <tr>  </tr>
     <tr>  </tr>
     <tr>  </tr>
     <tr>  </tr>
     
     <tr>
    <td><tr>
    <td class="p">&nbsp;&nbsp;&nbsp;Departure Date</td>

        <td class="p">&nbsp;&nbsp;&nbsp;Coach Type</td>
     </tr></td>
        <td><tr>


    <td class="p1"><div class="well">
                      <div id="datetimepicker4" class="input-append">
                        <input data-format="yyyy-MM-dd" type="text" name="departureDate"></input>
                        <span class="add-on">
                          <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                          </i>
                       </span>
                    </div>
                
                  <script type="text/javascript">
                      $(function() {
                      $('#datetimepicker4').datetimepicker({
                         pickTime: false
                       });
                     });
                  </script></td>


        <td class="p1"><input type="text" name="typelist" list="typelist">
                  <datalist id="typelist">
                    <option value="AC">
                    <option value="Non-AC">
                  </datalist></td>
        <tr>
          <td align="left">
            <input type="submit" value="Search">
          </td>
        </tr>
     </tr></td>
     </tr>
   </table>
  </tr>
  </table>
  <tr>
                <td></td>
                
              </tr>
              <tr>
              
            <br/>

            <table>
              <tr>
                <td>
                    
                </td>
              </tr>
            </table>
@endsection
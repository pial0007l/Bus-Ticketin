@extends ('layout.homeLayout')
@section('content2')
<style>
  .CONFIRM{
    height: 20px;
  }
</style>
@endsection
@section('content')
  <table border="0" width="100%">
    <tr>
      <td width="100"></td>
      <td align="center">
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
      <td>
        <br/>
        <center>
        <h3>Buy Tickets</h3>
        <form method="post">
          {{csrf_field()}}
            <table>
              <tr>
                <td>NAME: </td>
                <td><input type="text" name="name"></td>

              <td></td>
                <td>EMAIL: </td>
                <td><input type="text" name="email"></td>
              </tr>
              <tr>
                <td>MOBILE: </td>
                <td><input type="text" name="mobile"></td>
                <td></td>
                <td>GENDER: </td>
                <td class="p1"><input type="text" name="gender" list="sourcelist">
                            <datalist id="sourcelist">
                            <option value="Male">
                            <option value="Female">
                          </datalist></td>
              </tr>
              <td>AGE: </td>
                <td><input type="text" name="age"></td>
              <tr>
                <td>ADDRESS: </td>
                <td><input type="text" name="address"></td>
              <td></td>
                <td>N.ID/PASS: </td>
                <td><input type="text" name="nid"></td>
              </tr>
              <tr>
                <td>NATIONALITY: </td>
                    <td class="p1"><input type="text" name="nationality" list="nationality">
                            <datalist id="nationality">
                              <option value="Bangladeshi">
                              <option value="Foriegner">
                            </datalist></td>
              <td></td>
                <td>PAYMENT METHOD: </td>
                    <td class="p1"><input type="text" name="paymentmethod" list="paymentmethod">
                    <datalist id="paymentmethod">
                    <option value="Cash">
                    <option value="Card">
                   </datalist></td>
              </tr>

              <tr>
                <td>BOARDING POINT: </td>
                <td><input type="text" name="boardingpoint"></td>
              <td></td>
                <td>DROPING POINT: </td>
                <td><input type="text" name="dropingpoint"></td>
              </tr>
              <td></td>
               <tr>
                <td>PAYMENT AMOUNT: </td>
                <td><input type="text" name="paymentammount"></td>
               </tr>
               <tr>
                <td></td>
               </tr>
                <tr>
                  <div class="container">
  <table width="80%">
    <tr>
      <td width="50%">
         <table class="table">
    <thead>
      <tr>
        <th><h3>Seat Name<h3></th>
      </tr>
    </thead>
    <tbody>     
      @foreach($seat as $se)
      <tr class="warning">
        <td><h4>{{$se->seat_name}}<h4></td>
        <td><input type="checkbox" name={{$se->seat_name}} value="{{$se->seat_name}}"><h4><h4><h4></h4></td>
      </tr>
      @endforeach
       <td><input type="checkbox" name="Aq" ><h4><h4><h4></h4></td>
    </tbody>
  </table>
      </td>
    </tr>
  </table>
</div>
                </tr>
               <tr>
                      <td></td> <td></td>
                       <td class="CONFIRM"><input type="submit" value="confirm" name="CONFIRM"></td>
                     </tr>
            </table>
          </form>
          <br/>
          <br/>
          
        </center>
      </td>
      <td width="100"></td>
    </tr>
  </table>
  

      	

@endsection
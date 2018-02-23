@extends ('layout.buslayout')
@section('content')
{{ csrf_field() }}
				<h3>Create New Bus</h3>
				<form method="post">
					{{csrf_field()}}

						<table>
							<tr>
								<td>Bus Name: </td>
								<td class="p1"><input type="text" name="busName"></td>
							</tr>
							<tr>
								<td>Route: </td>
								<td class="p1"><input type="text" name="routelist" list="routeList">
									<datalist id="routeList">
  									<option value="Dhaka-Chittagong">
   									<option value="Dhaka-Syllet">
									</datalist></td>
							</tr>
							<tr>
								<td>Departure Date</td>
								<td class="p1">
									
    								<div class="well">
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
									</script>
    								
   								    </td>
								</tr>
							<tr>
							<td>Departure Time</td>
							<td class="p1"><div class="well">
 							    <div id="datetimepicker3" class="input-append">
    							<input data-format="hh:mm:ss" type="text" name="departureTime"></input>
   								 <span class="add-on">
     								 <i data-time-icon="icon-time" data-date-icon="icon-calendar">
      								 </i>
   								 </span>
  								</div>
								</div>
								<script type="text/javascript">
 									 $(function() {
  									  $('#datetimepicker3').datetimepicker({
  								    pickDate: false
  									  });
 										 });
									</script>
								</td>
							</tr>
							<tr>
								<td>Starting Counter </td>
								<td class="p1"><input type="text" name="startingCounter" list="startingCounter">
                  <datalist id="startingCounter">
                    <option value="Dhaka">
                    <option value="Syllet">
                  </datalist></td>
							</tr>
							<tr>
								<td>Ending Counter: </td>
								<td class="p1"><input type="text" name="endingCounter" list="endingCounter">
                  <datalist id="endingCounter">
                    <option value="Dhaka">
                    <option value="Syllet">
                  </datalist></td>
							</tr>
							<tr>
								<td>Fare </td>
								<td class="p1"><input type="text" name="fare"></td>
							</tr>
							<tr>
							<td>Arrival Time</td>
							<td class="p1"><div class="well">
 							    <div id="timepicker" class="input-append">
    							<input data-format="hh:mm:ss" type="text" name="arrivalTime"></input>
   								 <span class="add-on">
     								 <i data-time-icon="icon-time" data-date-icon="icon-calendar">
      								 </i>
   								 </span>
  								</div>
								</div>
								<script type="text/javascript">
 									 $(function() {
  									  $('#timepicker').datetimepicker({
  								    pickDate: false
  									  });
 										 });
									</script>
								</td>
							</tr>
							<tr>
								<td>Coach Type </td>
								<td class="p1"><input type="text" name="typelist" list="typeList">
									<datalist id="typeList">
  									<option value="AC">
   									<option value="Non-AC">
									</datalist></td>
							</tr>
							<tr>
								<td >Seat Available </td>
								<td class="p1"><input type="Text" name="availableSeat"></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" value="Create"></td>
							</tr>
							<tr>
							<td colspan="5">
						<br/>
					</td>
						</form>
						@if($errors->any())
		            @foreach($errors->all() as $err)
			         <p>{{$err}}</p>
		            @endforeach
	                @endif
@endsection
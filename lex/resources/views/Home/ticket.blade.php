@extends ('layout.homeLayout')
@section('content')
	<table>
		<tr>
			<td>
				<tr><br></tr>
				<tr><br></tr>
				<tr><br></tr>
				<tr><br></tr><tr><br></tr>
				<tr>
					<td><h4>Name:</td>
					<td><h4>{{$pass->Passenger_name}}<h4></td>
				</tr>
				<tr>
					<td><h4>Mobile:</td>
					<td><h4>{{$pass->Mobile}}<h4></td>
				</tr>
				<tr>
					<td><h4>Boarding:</td>
					<td><h4>{{$pass->Boarding_point}}<h4></td>
				</tr>
				<tr>
					<td><h4>Seat No:</td>
					@foreach($set as $se)
						<td><h4>{{$se->seat_name}}<h4></td>
					@endforeach
					
				</tr>
			</td>
			<td></td>
		</tr>
	</table>
@endsection('content')
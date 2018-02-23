@extends ('layout.buslayout')
@section('content')

	<div class="container">
  <h2>List Of Bus</h2>
  <table class="table">
    <thead>
      <tr>
      	<th>Departure Time</th>
        <th>Bus Name</th>
        <th>Starting Counter</th>
        <th>Ending Counter</th>
        <th>Fare</th>
        <th>Coach Type</th>
        <th>Arrival Time</th>
        <th>View</th>
      </tr>
    </thead>
    <tbody>     
      @foreach($bus as $bu)
      <tr class="warning">
        <td>{{$bu->departure_time}}</td>
        <td>{{$bu->bus_name}}</td>
        <td>{{$bu->starting_counter}}</td>
        <td>{{$bu->ending_counter}}</td>
        <td>{{$bu->fare}}</td>
        <td>{{$bu->coach_type}}</td>
        <td>{{$bu->arival_Time}}</td>
        <td><a href="{{route('adminhome.index', [$bu->id])}}">View</a></td>
        <td><a href="{{route('bushome.edit', [$bu->id])}}">Edit</a></td>
        <td><a href="{{route('bushome.delete', [$bu->id])}}">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
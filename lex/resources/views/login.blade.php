@extends ('layout.homeLayout')
@section('content')
				<center>
				<h3>User Authentication</h3>
					<form method="post">
							{{csrf_field()}}
						<table>
							<tr>
								<td>USERNAME: </td>
								<td><input type="text" name="username"></td>
							</tr>
							<tr>
								<td>PASSWORD: </td>
								<td><input type="password" name="password"></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" value="Login"></td>
							</tr>
							<tr>
								<td></td>
								<td>
									<br/>
									
								</td>
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
@endsection('content')
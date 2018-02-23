@extends ('layout.buslayout')
@section('content')
{{ csrf_field() }}
				<h3>Create New Seats</h3>
				<form method="post">
					{{csrf_field()}}

						<table border="0" width="40%">
							<tr>
								<td><input type="checkbox" name="a1" value="A1" checked><h4>A1</h4></td>
								<td><input type="checkbox" name="a2" value="A2" checked><h4>A2</h4></td>
								<td><input type="checkbox" name="a3" value="A3" checked><h4>A3</h4></td>
								<td><input type="checkbox" name="a4" value="A4" checked><h4>A4</h4></td>
							</tr>
							<tr>
								<td><input type="checkbox" name="b1" value="B1" checked><h4>B1</h4></td>
								<td><input type="checkbox" name="b2" value="B2" checked><h4>B2</h4></td>
								<td><input type="checkbox" name="b3" value="B3" checked><h4>B3</h4></td>
								<td><input type="checkbox" name="b4" value="B4" checked><h4>B4</h4></td>
							</tr>

							<tr>
								<td><input type="checkbox" name="c1" value="C1" checked><h4>C1</h4></td>
								<td><input type="checkbox" name="c2" value="C2" checked><h4>C2</h4></td>
								<td><input type="checkbox" name="c3" value="C3" checked><h4>C3</h4></td>
								<td><input type="checkbox" name="c4" value="C4" checked><h4>C4</h4></td>
							</tr>

							<tr>
								<td><input type="checkbox" name="d1" value="D1" checked><h4>D1</h4></td>
								<td><input type="checkbox" name="d2" value="D2" checked><h4>D2</h4></td>
								<td><input type="checkbox" name="d3" value="D3" checked><h4>D3</h4></td>
								<td><input type="checkbox" name="d4" value="D4" checked><h4>D4</h4></td>
							</tr>

							<tr>
								<td><input type="checkbox" name="e1" value="E1" checked><h4>E1</h4></td>
								<td><input type="checkbox" name="e2" value="E2" checked><h4>E2</h4></td>
								<td><input type="checkbox" name="e3" value="E3" checked><h4>E3</h4></td>
								<td><input type="checkbox" name="e4" value="E4" checked><h4>E4</h4></td>
							</tr>

							<tr>
								<td><input type="checkbox" name="f1" value="F1" checked><h4>F1</h4></td>
								<td><input type="checkbox" name="f2" value="F2" checked><h4>F2</h4></td>
								<td><input type="checkbox" name="f3" value="F3" checked><h4>F3</h4></td>
								<td><input type="checkbox" name="f4" value="F4" checked><h4>F4</h4></td>
							</tr>

							<tr>
								<td><input type="checkbox" name="g1" value="G1" checked><h4>G1</h4></td>
								<td><input type="checkbox" name="g2" value="G2" checked><h4>G2</h4></td>
								<td><input type="checkbox" name="g3" value="G3" checked><h4>G3</h4></td>
								<td><input type="checkbox" name="g4" value="G4" checked><h4>G4</h4></td>
							</tr>

							<tr>
								<td><input type="checkbox" name="h1" value="H1" checked><h4>H1</h4></td>
								<td><input type="checkbox" name="h2" value="H2" checked><h4>H2</h4></td>
								<td><input type="checkbox" name="h3" value="H3" checked><h4>H3</h4></td>
								<td><input type="checkbox" name="h4" value="H4" checked><h4>H4</h4></td>
							</tr>


								<td></td>
								<td align="center"><br><input type="submit" value="Create"></td>
							</tr>
						</table>
						</form>
@endsection
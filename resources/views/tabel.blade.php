@extends ('master')

@section ('slide')
		<h1>Cara Membuat table dengan Bootstrap</h1>
	<table class="table table-hover">
		<thead>
			<tr class="table bg-danger">
				<th >No</th>
				<th>Makanan</th>
				<th>Harga</th>				
			</tr>
		</thead>
		<tbody>
			<tr class="table bg-warning">
				<td>1</td>
				<td>Bakso</td>
				<td>12.000</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Mie Goreng</td>
				<td>7.000</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Nasi Goreng</td>
				<td>15.000</td>
			</tr>
			<tr>
				<td>4</td>
				<td>Sate Padang</td>
				<td>17.000</td>
			</tr>
			<tr>
				<td>5</td>
				<td>Nasi Soto</td>
				<td>20.000</td>
			</tr>
		</tbody>
	</table>
@stop

@section ('sidebar-up')
	<h1 style="text-align: center">hai ini jumbotron!</h1>
	<h3 style="text-align: center"> ini adalah contoh pengunaan jumbotron</h3>
@stop
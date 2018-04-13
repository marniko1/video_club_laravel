@extends('layout')

@section('content')
				<table class="table table-hover"">
					<caption>List of rentals</caption>
					<thead class="thead-dark">
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Client</th>
					      <th scope="col">Total</th>
					      <th scope="col">Created</th>
					      <th scope="col">Due</th>
					      <th scope="col">Opened</th>
					    </tr>
					</thead>
					<tbody>
						@foreach ($rentals as $key => $rental)
							<tr style="cursor: pointer;" onclick="document.location.href='rentals/{{ $rental->id }}'">
							    <th scope="row">{{ $key + 1 }}</th>
							    <td>{{ $rental->client }}</td>
							    <td>{{ $rental->totals }}</td>
							    <td>{{ $rental->created }}</td>
							    <td>{{ $rental->due }}</td>
							    <td>{{ $rental->opened == 0 ? "No" : "Yes" }}</td>
						    </tr>
						@endforeach
					 </tbody>
				</table>
				<nav>
				    <ul class="pagination justify-content-center">
					    <li class="page-item">
					        <a class="page-link" href="#" tabindex="-1">Previous</a>
					    </li>
					    <li class="page-item"><a class="page-link" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item">
					        <a class="page-link" href="#">Next</a>
					    </li>
				    </ul>
				</nav>
@stop
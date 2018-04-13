@extends('layout')

@section('content')
				<table class="table">
					<thead class="thead-dark">
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Title</th>
					      <th scope="col">Price</th>
					    </tr>
					</thead>
					<tbody>
						@foreach ($rental as $key => $value)
							<tr>
						      <th scope="row">{{ $key + 1 }}</th>
						      <td>{{ $value->title }}</td>
						      <td>{{ $value->price }}</td>
						    </tr>
						@endforeach
					    <tr>
					      <th scope="row">TOTAL</th>
					      <td></td>
					      <td>{{ $value->totals }}</td>
					    </tr>
					 </tbody>
				</table>
				<ul>
					<li>Client: {{ $value->client }}</li>
					<li>Active: {{ $value->opened == 0 ? "No" : "Yes" }}</li>
					<li>{{ $value->created }}	</li>
					<li>{{ $value->due }}	</li>
				</ul>
				<!-- @php
		            var_dump($rental);
		        @endphp -->
@stop
@extends('layouts.admin')
@section('content')
<div class="page-inner">
	<div class="page-title">
		<h3>Patients</h3>
		<div class="page-breadcrumb">
			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li class="active">Patients</li>
			</ol>
		</div>
	</div>
	<div id="main-wrapper">
		<div class="row">
			<div class="invoice col-md-12">
				<div class="panel panel-white">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 text-right">

								<button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
							</div>



							<!--table-->

							<div class="col-md-12">
								<h1>About Patient</h1>
								<table class="table">
									<thead>
										<tr>
											<th>Id</th>
											<th>Name</th>
											<th>Phone</th>
											<th>Gender</th>
											<th>Address</th>
											<th>Date</th>
											<th>Department</th>
											<th>doctor</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>{{ $patient->id }}</td>
											<td>{{ $patient->name }}</td>
											<td>{{ $patient->phone }}</td>
											<td>{{$patient->gender}}</td>
											<td>{{ $patient->address }}</td>
											<td>{{ $patient->date }}</td>
											<td>{{ $patient->department }}</td>
											<td>{{ $patient->user($patient->doctor)->name }}</td>
										</tr>
									</tbody>
								</table>
								<h1>Prescription Table</h1>
								@foreach ($prescriptions as $prescription)
								<table class="table">
									<thead>
										<tr>
											<th>Disease</th>
											<th>Test</th>
											<th>Medicine</th>
											<th>Date</th>
											<th>Time</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>{{ $prescription->disease }}</td>
											<td>{{ $prescription->test }}</td>
											<td>{{ $prescription->medicine }}</td>
											<td>{{ $prescription->date }}</td>
											<td>{{ $prescription->time }}</td>
										</tr>
									</tbody>
								</table>
								@endforeach
							</div>




						</div>
						<!--row-->
					</div>
				</div>
			</div>
		</div><!-- Row -->
	</div><!-- Main Wrapper -->
	<div class="page-footer">
		<p class="no-s text-center">2019<i> &copy; MD MOMEN SHEKH</i></p>
	</div>
</div>
@endsection

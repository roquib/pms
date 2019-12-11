@extends('layouts.admin')
@section('content')
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
							<h1 class="text-center"
								style="color: azure;opacity: 1;background-color: cadetblue;line-height: 52px;border-radius: 4px;margin-bottom: 45px;">
								About Patient</h1>

							<table class="table">
								<thead>

									<tr>
										<th style="color: black;
											font-size: 16px;">ID</th>
										<th style="color: black;
											font-size: 16px;">Name</th>
										<th style="color: black;
											 font-size: 16px;">phone</th>
										<th style="color: black;
											font-size: 16px;">Gender</th>
										<th style="color: black;
											font-size: 16px;">Address</th>
										<th style="color: black;
											font-size: 16px;">Date</th>
										<th style="color: black;
											font-size: 16px;">Department</th>
										<th style="color: black;
											font-size: 16px;">Doctor</th>


									</tr>
								</thead>
								<tbody>
									<tr style="font-size: 15px;text-transform: capitalize;">
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
							@php
							$index = 1;
							@endphp
							@foreach ($prescriptions as $prescription)
							<h1 class="text-center"
								style="color: azure;opacity: 1;background-color: cadetblue;line-height: 52px;border-radius: 4px;margin-bottom: 45px;margin-top:115px;">
								Prescription Table {{$index++}}</h1>
							<table class="table">
								<thead>
									<tr style="color: black;
										font-size: 16px;">
										<th>Disease</th>
										<th>Test</th>
										<th>Medicine</th>
										<th>Date</th>
										<th>Time</th>
									</tr>
								</thead>
								<tbody>
									<tr style="font-size: 15px;text-transform: capitalize;">
										<td>{{ $prescription->disease }}</td>
										<td>
											<ul>
												@foreach ($prescription->tests($prescription->patient_id,$prescription->id) as $pres)
												<li>
													{{$pres->name}}
												</li>
												@endforeach
											</ul>
										</td>
										<td>
											<ul>
												@foreach ($prescription->medicines($prescription->patient_id,$prescription->id) as $pres)
												<li>
													{{$pres->name}}
												</li>
												@endforeach
											</ul>
										</td>
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
<div class="page-footer" style="background-color: cadetblue;">
	<p class="no-s text-center" style="font-size: 15px;">2019<i> &copy; MD MOMEN SHEKH</i></p>
</div>
@endsection
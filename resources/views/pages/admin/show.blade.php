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
								<h1 class="display-4">{{$patient->name}}</h1>
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
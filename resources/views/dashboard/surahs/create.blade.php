@extends('layouts.application')

@section('content')
<div class="right_col" role="main">
	<!-- {!! Form::open(['url' => 'administrator/surahs']) !!} -->
	<div class="page-title">
		<div class="title_left">
			<h3>Create Surat</h3>
		</div>

		<div class="title_right">
			<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search for...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">Go!</button>
					</span>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<ol class="breadcrumb">
		<li><a href="{{ url('/administrator') }}">Dashboard</a></li>
		<li><a href="{{ url('administrator/surahs') }}">Surahs</a></li>
		<li>Create</li>
	</ol>

	<div class="">

		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Form</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">

						<form class="form-horizontal form-label-left" novalidate role="form" method="POST" action="{{ url('administrator/surahs') }}">
							{{ csrf_field() }}         
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_surat">Nama Surat <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<input class="form-control col-md-7 col-xs-12" name="nama_surat" type="text" required="required">
									</div>
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="arab_surat">Arab Surat <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="arab_surat" class="form-control col-md-7 col-xs-12" required="required">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="arti_surat">Arti Surat <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="arti_surat" class="form-control col-md-7 col-xs-12" required="required">
								</div>
							</div>
							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-3">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
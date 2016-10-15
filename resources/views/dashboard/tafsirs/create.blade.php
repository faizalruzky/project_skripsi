@extends('layouts.application')

@section('content')
<div class="right_col" role="main">
	<!-- {!! Form::open(['url' => 'administrator/surahs']) !!} -->
	<div class="page-title">
		<div class="title_left">
			<h3>Create Tafsir</h3>
		</div>
	</div>
	<hr>
	<ol class="breadcrumb">
		<li><a href="{{ url('/administrator') }}">Dashboard</a></li>
		<li><a href="{{ url('administrator/surahs') }}">Tafsir</a></li>
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
						{!! Form::open(['url' => 'administrator/tafsirs', 'class' => 'form-horizontal form-label-left','role' => 'form', 'enctype'=>"multipart/form-data" ]) !!}         
						@include('dashboard/tafsirs.form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
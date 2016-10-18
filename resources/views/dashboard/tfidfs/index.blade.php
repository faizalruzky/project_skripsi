@extends('layouts.application')
@section('content')
<div class="right_col" role="main">
	<div class="page-title">
		<div class="title_left">
			<h3>Tfidf</h3>
		</div>
	</div>
	<hr>
	<ol class="breadcrumb">
		<li><a href="{{ url('/administrator') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
		@if ( Request::input('q') )
		{{-- */$query_params =  Request::input('q')/* --}}
		<li class="active"><a href="{{url('administrator/tfidfs')}}">Tfidf</a></li>
		<li class="active">condition(  

			{{-- */ $loop = 0 /* --}}
			@foreach( $query_params as $key => $value )
			@if ( $loop != 0 ) / @endif {{ $key }} : {{ $value }}
			{{-- */ $loop++ /* --}}
			@endforeach
			)</li>
			@else
			<li class="active">Tfidf</li>
			@endif
		</ol>
		<div class="row">

			<div class="col-md-8 col-md-offset-2">

				<h1 class="text-primary" style="text-align: center;">Cari Term</h1>

			</div>

		</div>


		<div class="container">

			<div class="panel panel-primary">
				<div class="panel-heading">

					<div class="row">

						<div class="col-lg-6 col-lg-offset-3">

							{!! Form::open(array('method'=>'get','class'=>'')) !!}

							<div class="input-group">


								<input name="search" value="{{ old('search') }}" type="text" class="form-control" placeholder="Search for...">

								<span class="input-group-btn">

									<!-- <button class="btn btn-default" type="submit"> GO!</button> -->
									<input class="btn btn-default" type="submit" value="Go!"> 

								</span>


							</div><!-- /input-group -->

							{!! Form::close() !!}

						</div><!-- /.col-lg-6 -->

					</div><!-- /.row -->

				</div>


				<div class="panel-body">


					<div class="row">

						<div class="col-lg-6">





							@if(!empty($freq))
							<p>Jumlah Dokumen: {{ $num_rows }}</p>
							@foreach($freq as $key => $value)
							<p>ID : {{ $value['id'] }}</p>
							<p>TERM : {{ $value['term'] }} </p>
							<p>Quran ID : {{ $value['quran_id'] }}</p>
							<p>IDF : {{ $value['idf'] }}</p>
							<p>W : {{ $value['w'] }}</p>
							@endforeach
							@endif

						</div>

					</div>

				</div>

			</div>
			<div class="row">

				<div class="col-md-8 col-md-offset-2">

					<h1 class="text-primary" style="text-align: center;">Hasil Perhitungan</h1>

				</div>

			</div>
			<div class="panel panel-primary">
				<div class="panel-body">
					<div class="row">

						<div class="col-lg-6">
							@foreach($tfidf as $bobot)
							<p>Quran ID : {{ $bobot->quran_id }}</p>
							<p>W : {{ $bobot->w }}</p>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="/assets/jquery/jquery.min.js"></script>
	@endsection
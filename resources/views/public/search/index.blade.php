@extends('layouts.app')
@section('content')
<div class="container">
	<span class="pull-right" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
	<div class="row">

		<div class="col-md-8 col-md-offset-2">

			<h1 class="text-primary" style="text-align: center;">Pencarian Ayat</h1>

		</div>

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

					@if(!empty($qurans))
					<p>Jumlah Dokumen: {{ $num_rows }}</p>
					@foreach($qurans as $key => $value)
					<h3>Surat {{ $value['nama_surat'] }}</h3>
					<p>Quran ID {{ $value['id'] }}</p>
					<h3 class="text-danger">Ayat {{ $value['ayat_id'] }}</h3>
					<h3>{{ $value['text_quran'] }}</h3>
					<p>{{ $value['terjemah'] }}</p>
					<small>Tafsir</small>
					<p>{{ $value['tafsir'] }}</p>
					@endforeach						
					@endif

				</div>

			</div>

			<div class="panel-body">

			</div>

		</div>

	</div>

</div>

@endsection
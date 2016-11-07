@extends('layouts.app')
@section('content')
<div class="container">
	<span class="pull-right" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
	<div class="row">

		<div class="col-md-8 col-md-offset-2">

			<h1 class="text-primary" style="color:#2A3F54; text-align: center;"><i class="glyphicon glyphicon-search"></i> Pencarian Ayat</h1>

		</div>

	</div>
</div>


<div class="container">

	<div class="panel panel-primary">

		<div style="background:#2A3F54;border:0px solid transparent" class="panel-heading">

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

				<div class="col-md-12 col-sm-12 col-xs-12">

					@if(!empty($qurans))
					
					@foreach($qurans as $key => $value)
					<h3>Surat {{ $value['nama_surat'] }}</h3>
					<p>Quran ID {{ $value['id'] }}</p>
					<h3 class="text-danger">Ayat {{ $value['ayat_id'] }}</h3>
					<h3 class="text-right">{{ $value['text_quran'] }}</h3>
					<small>Terjemah</small>
					<p class="text-justify">{{ $value['terjemah'] }}</p>
					<small>Tafsir Quraish Shihab</small>
					<p class="text-justify">{{ $value['tafsir'] }}</p>
					<small>Tafsir Jalalayn</small>
					<p class="text-justify">{{ $value['jalalayn'] }}</p>
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
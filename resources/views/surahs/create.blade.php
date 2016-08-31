@extends('layouts.app')

@section('content')
  <div class="container">
  	<h1>Create Surah</h1>
  	<hr>
  	<ol class="breadcrumb">
  		<li><a href="{{ url('/home') }}">Home</a></li>
  		<li><a href="{{ url('surahs') }}">Surahs</a></li>
  		<li>Create</li>
  	</ol>
  	@include('flash::message')
    {!! Form::open(['url' => 'surahs']) !!}
      @include('surahs.form', ['submitText' => '<i class="fa fa-plus"></i> Create'])
    {!! Form::close() !!}

    <!-- ================================================== -->
  </div>
@stop
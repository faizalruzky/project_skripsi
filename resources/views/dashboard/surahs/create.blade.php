@extends('layouts.application')

@section('content')
<div class="right_col" role="main">
  <div class="row">
    <h1>Create Surah</h1>
    <hr>
    <ol class="breadcrumb">
      <li><a href="{{ url('/administrator') }}">Dashboard</a></li>
      <li><a href="{{ url('administrator/surahs') }}">Surahs</a></li>
      <li>Create</li>
    </ol>

    {!! Form::open(['url' => 'administrator/surahs']) !!}
    @include('dashboard/surahs.form', ['submitText' => '<i class="fa fa-plus"></i> Create'])
    {!! Form::close() !!}

    <!-- ================================================== -->
  </div>
</div>
@stop
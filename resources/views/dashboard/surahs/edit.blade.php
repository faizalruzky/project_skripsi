@extends('layouts.application')

@section('content')
<div class="right_col" role="main">
  <div class="row">
    <h1>Edit Surah</h1>
    <hr>
    <ol class="breadcrumb">
      <li><a href="{{ url('/administrator') }}">Dashboard</a></li>
      <li><a href="{{ url('administrator/surahs') }}">Surahs</a></li>
      <li>Edit</li>
    </ol>
    {!! Form::model($surah, ['method' => 'PATCH', 'action' => ['SurahsController@update', $surah->id]]) !!}
    @include('dashboard/surahs.form', ['submitText' => '<i class="fa fa-check"></i> Update'])
    {!! Form::close() !!}

    <!-- ================================================== -->
  </div>
</div>
@stop
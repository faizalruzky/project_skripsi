@extends('layouts.application')

@section('content')
<div class="right_col" role="main">
{!! Form::open(['url' => 'administrator/surahs']) !!}
    <h1>Create Surah</h1>
    <hr>
    <ol class="breadcrumb">
      <li><a href="{{ url('/administrator') }}">Dashboard</a></li>
      <li><a href="{{ url('administrator/surahs') }}">Surahs</a></li>
      <li>Create</li>
    </ol>
    
    
    @include('dashboard/surahs.form', ['submitText' => '<i class="fa fa-plus"></i> Create'])
    {!! Form::close() !!}
   
</div>
@endsection
@extends('layouts.apppublic')
@section('content')
<div class="container">
  <div class="row">
    @foreach ($surahs as $surah)
    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="list-group">
      <table class="table table-hover">     
        <a href="{{ url('administrator/surahs',$surah->id) }}" class="list-group">
       <div class="clearfix visible-xs-block"></div>
       <div class="col-md-1 col-sm-1 col-xs-1">{{ $surah->id }}</div>
       <div class="col-md-8 col-sm-8 col-xs-8">{{ $surah->nama_surat }}<br>{{ $surah->arti_surat }}</div>
       <h4>{{ $surah->arab_surat }}</h4>
        </a>
        </table> 
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
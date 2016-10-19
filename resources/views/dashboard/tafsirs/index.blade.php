@extends('layouts.application')

@section('content')
<div class="right_col" role="main">
  <div class="row">
    <div class="page-title">
      <div class="title_left">
        <h3>Tafsir Quraish Syihab</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input id="keywords" type="search" class="form-control" placeholder="Cari...">
            <span class="input-group-btn">
              <button id="searchsurahtafsir" class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <ol class="breadcrumb">
      <li><a href="{{ url('/administrator') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
      @if ( Request::input('q') )
      {{-- */$query_params =  Request::input('q')/* --}}
      <li class="active"><a href="{{url('administrator/tafsirs')}}">Tafsir</a></li>
      <li class="active">condition(  

        {{-- */ $loop = 0 /* --}}
        @foreach( $query_params as $key => $value )
        @if ( $loop != 0 ) / @endif {{ $key }} : {{ $value }}
        {{-- */ $loop++ /* --}}
        @endforeach
        )</li>
        @else
        <li class="active">Tafsir</li>
        @endif
      </ol>
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="visible-lg-inline visible-md-inline">Tafsir</h3>
        </div>
        <div class="panel-body">
          <div id="tafsirsurahs-list"> 
            @include('dashboard/tafsirs.list')
          </div>
        </div>
      </div>
      <!-- ================================================== -->
    </div>
  </div>
</div>
<script src="/assets/jquery/jquery.min.js"></script>
<script src="/assets/js/ajax-customtafsir.js"></script>
@endsection
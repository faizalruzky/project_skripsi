@extends('layouts.application')

@section('content')
<div class="right_col" role="main">
  <div class="row">
    <div class="page-title">
      <div class="title_left">
        <h3>Surat</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input class="form-control" type="search" id="keywords" placeholder="Cari..."/>
            <span class="input-group-btn">
              <button id="search" class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <ol class="breadcrumb">
      <li><a href="{{ url('/administrator') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
      @if ( Request::input('q') )
      {{-- */$query_params =  Request::input('q')/* --}}
      <li class="active"><a href="{{url('administrator/surahs')}}">Surat</a></li>
      <li class="active">condition(  

        {{-- */ $loop = 0 /* --}}
        @foreach( $query_params as $key => $value )
        @if ( $loop != 0 ) / @endif {{ $key }} : {{ $value }}
        {{-- */ $loop++ /* --}}
        @endforeach
        )</li>
        @else
        <li class="active">Surat</li>
        @endif
      </ol>
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="visible-lg-inline visible-md-inline">Surat</h3>
          <!-- <a href="{{ url('administrator/surahs/create') }}" class="btn btn-primary pull-right">
            <i class="fa fa-plus"></i> Create Surat
          </a> -->
        </div>
        <div class="panel-body">
          <div id="surahs-list"> 
            @include('dashboard/surahs.list')
          </div>
        </div>
      </div>

      <!-- ================================================== -->
    </div>
  </div>
</div>
<script src="/assets/jquery/jquery.min.js"></script>
<script src="/assets/js/ajax-custom.js"></script>
@endsection

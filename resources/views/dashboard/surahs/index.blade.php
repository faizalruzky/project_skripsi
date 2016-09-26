@extends('layouts.application')

@section('content')
<div class="right_col" role="main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/administrator') }}">Dashboard</a></li>
      <li>Surahs</li>
    </ol>
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="visible-lg-inline visible-md-inline">Surahs</h3>
        <a href="{{ url('administrator/surahs/create') }}" class="btn btn-primary pull-right">
          <i class="fa fa-plus"></i> Create Surah
        </a>
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
<script src="/assets/js/custom.js"></script>
@endsection

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
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <ol class="breadcrumb">
      <li><a href="{{ url('/administrator') }}">Dashboard</a></li>
      <li>Surat</li>
    </ol>
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="visible-lg-inline visible-md-inline">Surat</h3>
        <a href="{{ url('administrator/surahs/create') }}" class="btn btn-primary pull-right">
          <i class="fa fa-plus"></i> Create Surat
        </a>
      </div>
      <div class="panel-body">
        <div id="surahs-list">
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">                
              <tr>
                <th>No Surat</th>
                <th>Nama Surat</th>          
                <th>Option</th>
              </tr>
              {{-- */$x=0;/* --}}
              @foreach ($surahs as $surah)
              {{-- */$x++;/* --}}
              <tr>
                <td>{{ $surah->id }}</td>
                <td><a href="{{ url('administrator/surahs',$surah->id) }}">{{ $surah->nama_surat }} <h4>{{ $surah->arab_surat }}</h4> {{ $surah->arti_surat }}</a></td>
                <div>
                  <td>
                    <a class="btn btn-info" href="{{ action('SurahsController@edit', $surah->id) }}"><i class="fa fa-pencil"></i> Edit</a>

                    {!! Form::open(['action' => ['SurahsController@destroy', $surah->id], 'method' => 'DELETE','style' => 'display:inline']) !!}
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                    {!! Form::close() !!}
                  </td>
                </div>
              </tr>
              @endforeach
            </table>
            {!! $surahs->render() !!}
          </div>
        </div>
      </div>
    </div>
    <!-- ================================================== -->
  </div>
</div>
<script src="/assets/js/custom1.js"></script>
@endsection

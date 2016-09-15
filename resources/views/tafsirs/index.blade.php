@extends('layouts.app')

@section('content')
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">Home</a></li>
      <li><a href="{{ url('tafsirs') }}">Tafsirs</a></li>
    </ol>
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="visible-lg-inline visible-md-inline">Tafsir</h3>
        <a href="{{ url('tafsirs/create') }}" class="btn btn-primary pull-right">
          <i class="fa fa-plus"></i> Add Tafsirs
        </a>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover">                
          <tr>
            <th>No Ayat</th>
            <th>Nama Surat</th>          
            <th>Option</th>
          </tr>
           {{-- */$x=0;/* --}}
          @foreach ($surahs as $surah)
          {{-- */$x++;/* --}}
            <tr>
            <td>{{ $x }}</td>
              <td><a href="{{ url("tafsirs",$surah->id) }}">{{ $surah->nama_surat }} <h4>{{ $surah->arab_surat }}</h4> {{ $surah->arti_surat }}</a></td>
              <div>
              <td>
                <a class="btn btn-info" href="{{ action('SurahsController@edit', $surah->id) }}"><i class="fa fa-pencil"></i> Edit</a>
             
              {!! Form::open(['action' => ['SurahsController@destroy', $surah->id], 'method' => 'DELETE']) !!}
                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
              {!! Form::close() !!}
              </td>
              </div>
            </tr>
          @endforeach
          </table>
          {!! $surahs->links() !!}
        </div>
      </div>
    </div>
    <!-- ================================================== -->
  </div>
@stop
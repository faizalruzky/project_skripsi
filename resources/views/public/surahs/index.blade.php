@extends('layouts.app')
@section('content')

<div class="container">
 <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
 <h2>Surat</h2>
  <div class="row">

    <div class="col-md-4 col-sm-4 col-xs-12">
      @foreach ($surahs as $surah)
      @if ($surah->id==0)
      @continue
      @endif
      <table style="border-color:white" class="table table-responsive table-hover"> 
        <td>
          <div class="list-group">
            <a href="{{ url('administrator/surahs',$surah->id) }}">
              <div class="col-md-1 col-sm-1 col-xs-1">{{ $surah->id }}</div>
              <div class="col-md-8 col-sm-8 col-xs-8">{{ $surah->nama_surat }}<br>{{ $surah->arti_surat }}</div>
              <h4 class="pull-right">{{ $surah->arab_surat }}</h4>
            </a>
          </div>
        </td>
      </table>
      @if ($surah->id==38)
      @break
      @endif
      @endforeach
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12">
      @foreach ($surahs as $surah)
      @if ($surah->id< 39)
      @continue
      @endif
      <table style="border-color:white" class="table table-responsive table-hover"> 
        <td>
          <div class="list-group">
            <a href="{{ url('administrator/surahs',$surah->id) }}">
              <div class="col-md-1 col-sm-1 col-xs-1">{{ $surah->id }}</div>
              <div class="col-md-8 col-sm-8 col-xs-8">{{ $surah->nama_surat }}<br>{{ $surah->arti_surat }}</div>
              <h4 class="pull-right">{{ $surah->arab_surat }}</h4>
            </a>
          </div>
        </td>
      </table>
      @if ($surah->id==76)
      @break
      @endif
      @endforeach
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12">
      @foreach ($surahs as $surah)
      @if ($surah->id< 77)
      @continue
      @endif
      <table style="border-color:white" class="table table-responsive table-hover"> 
        <td>
          <div class="list-group">
            <a href="{{ url('administrator/surahs',$surah->id) }}">
              <div  class="col-md-1 col-sm-1 col-xs-1">{{ $surah->id }}</h5></div>
              <div class="col-md-8 col-sm-8 col-xs-8">{{ $surah->nama_surat }}<br>{{ $surah->arti_surat }}</div>
              <h4 class="pull-right">{{ $surah->arab_surat }}</h4>
            </a>
          </div>
        </td>
      </table>
      @endforeach
    </div>

  </div>
</div>

@endsection
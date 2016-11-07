@extends('layouts.app')
@section('content')

<div class="container">
 <span class="pull-right" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
 <h2>Tafsir Jalalayn</h2>
  <div class="row">

    <div class="col-md-4 col-sm-4 col-xs-12">
      @foreach ($tafsirs as $tafsir)
      @if ($tafsir->id==0)
      @continue
      @endif
      <table style="border: 0px solid transparent" class="table table-responsive table-hover"> 
        <td>
          <div class="list-group">
            <a href="{{ url('/jalalayn',$tafsir->id) }}">
              <div class="col-md-1 col-sm-1 col-xs-1">{{ $tafsir->id }}</div>
              <div class="col-md-8 col-sm-8 col-xs-8">{{ $tafsir->nama_surat }}<br>{{ $tafsir->arti_surat }}</div>
              <h4 class="pull-right">{{ $tafsir->arab_surat }}</h4>
            </a>
          </div>
        </td>
      </table>
      @if ($tafsir->id==38)
      @break
      @endif
      @endforeach
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12">
      @foreach ($tafsirs as $tafsir)
      @if ($tafsir->id< 39)
      @continue
      @endif
      <table style="border-color:white" class="table table-responsive table-hover"> 
        <td>
          <div class="list-group">
            <a href="{{ url('/jalalayn',$tafsir->id) }}">
              <div class="col-md-1 col-sm-1 col-xs-1">{{ $tafsir->id }}</div>
              <div class="col-md-8 col-sm-8 col-xs-8">{{ $tafsir->nama_surat }}<br>{{ $tafsir->arti_surat }}</div>
              <h4 class="pull-right">{{ $tafsir->arab_surat }}</h4>
            </a>
          </div>
        </td>
      </table>
      @if ($tafsir->id==76)
      @break
      @endif
      @endforeach
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12">
      @foreach ($tafsirs as $tafsir)
      @if ($tafsir->id< 77)
      @continue
      @endif
      <table style="border-color:white" class="table table-responsive table-hover"> 
        <td>
          <div class="list-group">
            <a href="{{ url('/jalalayn',$tafsir->id) }}">
              <div  class="col-md-1 col-sm-1 col-xs-1">{{ $tafsir->id }}</h5></div>
              <div class="col-md-8 col-sm-8 col-xs-8">{{ $tafsir->nama_surat }}<br>{{ $tafsir->arti_surat }}</div>
              <h4 class="pull-right">{{ $tafsir->arab_surat }}</h4>
            </a>
          </div>
        </td>
      </table>
      @endforeach
    </div>

  </div>
</div>

@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('surahs') }}">Surahs</a></li>
        <li>Show</li>
    </ol>
    <div class="panel panel-info">
        <div class="panel-heading">
      
         
            <h4 class="visible-lg-inline visible-md-inline">Surah Details</h4>
        
        </div>
        <div class="panel-body">
            <div class=table-responsive>
                <div>
                    <p><b>Surat</b>: {{ $surah->nama_surat }}<h4>{{ $surah->arab_surat}}</h4>{{ $surah->arti_surat }}</p>
                </div>
                <table class="table table-bordered table-striped table-hover">
                    <div>
                        <tr>
                            <th>Ayat</th>
                        </tr>
                        @foreach ($qurans as $quran)
                        <tr>
                            <td><h3>{{$quran->text_quran}}</h3></td>
                        </tr>
                        <tr>
                            <td>{{$quran->terjemah}}</td>
                        </tr>
                        @endforeach         
                    </div>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
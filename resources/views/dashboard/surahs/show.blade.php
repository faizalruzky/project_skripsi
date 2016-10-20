@extends('layouts.application')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="{{ url('/administrator') }}">Dashboard</a></li>
            <li><a href="{{ url('administrator/surahs') }}">Surat</a></li>
            <li>{{ $surah->nama_surat }}</li>
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
                    <table class="table table-hover">
                        @foreach ($qurans as $quran)
                         <div class="list-group">
                                    <div class="col-md-1 col-sm-1 col-xs-1">{{ $quran->ayat_id }}</div>
                                    <div class="col-md-11 col-sm-11 col-xs-11"><h3 class="text-right"">{{$quran->text_quran}}</h3><p class="text-justify"">{{$quran->terjemah}}</p></div>
                                    <div class="col-md-12 col-sm-12 col-xs-12"></div>
                                </div>
                        @endforeach 
                    </table> 
                    {!! $qurans->links() !!}

                </div>
            </div>
        </div>
    </div>
</div>
<script src="/assets/jquery/jquery.min.js"></script>
@stop
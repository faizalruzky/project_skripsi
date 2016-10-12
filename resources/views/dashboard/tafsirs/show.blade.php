@extends('layouts.application')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="{{ url('/administrator') }}">Dashboard</a></li>
            <li><a href="{{ url('administrator/tafsirs') }}">Tafsir</a></li>
            <li>Show</li>
        </ol>
        <div class="panel panel-info">
            <div class="panel-heading">


                <h4 class="visible-lg-inline visible-md-inline">Tafsir Details</h4>

            </div>
            <div class="panel-body">
                <div class=table-responsive>
                    <div>
                        <p><b>Surat</b>: {{ $surah->nama_surat }}<h4>{{ $surah->arab_surat}}</h4>{{ $surah->arti_surat }}</p>
                    </div>
                    <table class="table table-bordered table-striped table-hover">
                        <div>
                            <tr>
                                <th>Tafsir</th>
                            </tr>
                            @foreach ($tafsirs as $tafsir)
                            <tr>
                                <td><h3>{{$tafsir->tafsir}}</h3></td>
                            </tr>

                        </div>
                        @endforeach 
                    </table> 
                    {!! $tafsirs->links() !!}

                </div>
            </div>

        </div>
    </div>
</div>
<script src="/assets/jquery/jquery.min.js"></script>
@endsection
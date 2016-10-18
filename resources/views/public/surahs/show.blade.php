@extends('layouts.apppublic')

@section('content')
<div class="right_col" role="main">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home </a></li>
 <!--  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-book"></i> Quran <span class="fa fa-chevron-down"></span></a>
    <ul class="dropdown-menu nav child_menu" role="menu"> -->
      <li><a href="{{url('/surahs')}}"><i class="glyphicon glyphicon-list-alt"></i> Detail Surat </a></li>
      <li><a href="{{url('/tafsirs')}}"><i class="glyphicon glyphicon-book"></i> Tafsir </a></li>
    <!-- </ul>
    
  </li> -->
  <li><a href="#">About</a></li>
</div>
    <div class="row">
     <div class="clearfix"></div>
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
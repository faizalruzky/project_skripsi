@extends('layouts.application')

@section('content')
<div class="right_col" role="main">
  <div class="row">
    <div class="page-title">
      <div class="title_left">
        <h3>Tafsir Quraish Syihab</h3>
      </div>
      </div>
      <ol class="breadcrumb">
        <li><a href="{{ url('/administrator') }}">Dashboard</a></li>
        <li><a href="{{ url('/administrator/tafsirs') }}">Tafsirs</a></li>
        <li>{!!$surah->nama_surat!!}</li>
      </ol>
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="visible-lg-inline visible-md-inline">Tafsir Surat {!!$surah->arab_surat!!} ({!!$surah->arti_surat!!})</h3>
          <!-- <a href="{{ url('administrator/tafsirs',$qurantafsir->ayat_id) }}" class="btn btn-primary pull-right">
            <i class="fa fa-plus"></i> Add Tafsirs
          </a> -->
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">                
              <tr>
                <th>No Ayat</th>
                <th>Tafsir</th>          
                <th>Option</th>
              </tr>
              @foreach ($tafsirs as $tafsir)
              <tr>
                <td>{{ $tafsir->ayat_id }}</td>
                <td>
                  {!! Form::model($tafsir, ['method' => 'PATCH', 'action' => ['TafsirsController@update', $tafsir->id]]) !!}
                  {!! Form::textarea('tafsir',null,array('class'=>'span12 form-control','placeholder'=>'update tafsir disini','rows'=>'5','value'=>'{{ $tafsir->tafsir }}'))!!}
                  
                </td>
                <div>
                  <td>
                    {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                    {!! Form::close() !!}
                    {!! Form::open(['action' => ['SurahsController@destroy', $tafsir->id], 'method' => 'DELETE']) !!}
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                    {!! Form::close() !!}
                  </td>
                </div>
              </tr>
              @endforeach
            </table>
            {!! $tafsirs->links() !!}
          </div>
        </div>
      </div>
      <!-- ================================================== -->
    </div>
  </div>
</div>
@endsection
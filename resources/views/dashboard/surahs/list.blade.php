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

                  {!! Form::open(['action' => ['SurahsController@destroy', $surah->id], 'method' => 'DELETE']) !!}
                  <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                  {!! Form::close() !!}
                </td>
              </div>
            </tr>
            @endforeach
          </table>
          {!! $surahs->render() !!}
        </div>
@if (count($surahs))
<div class="table-responsive">
              <table class="table table-bordered table-striped table-hover">                
                <tr>
                  <th class="text-center"><a href="" id="id">No Surat<i id="ic-direction"></i></a></th>
                  <th>Nama Surat</th>          
                  <th>Option</th>
                </tr>
                {{-- */$x=0;/* --}}
                @foreach ($surahs as $surah)
                {{-- */$x++;/* --}}
                <tr>
                  <td>{{ $surah->id }}</td>
                  <td><a href="{{ url('administrator/tafsirs',$surah->id) }}">{{ $surah->nama_surat }} <h4>{{ $surah->arab_surat }}</h4> {{ $surah->arti_surat }}</a></td>
                  <div>
                    <td>
                      <a class="btn btn-info" href="{{ action('TafsirsController@edit', $surah->id) }}"><i class="fa fa-pencil"></i> Edit</a>

                      {!! Form::open(['action' => ['SurahsController@destroy', $surah->id], 'method' => 'DELETE','style' => 'display:inline']) !!}
                      <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                      {!! Form::close() !!}
                    </td>
                  </div>
                </tr>
                @endforeach
              </table>
              {!! $surahs->render() !!}
            <input id="direction" type="hidden" value="asc" />

            </div>
            @else
   <div class="card-panel red darken-3 white-text">Oops.. Data</b> Tidak Ditemukan</div>
@endif

@if (count($tafsirs))
<div class="table-responsive">
              <table class="table table-bordered table-striped table-hover">                
                <tr>
                  <th class="text-center"><a href="" id="id">No Surat<i id="ic-direction"></i></a></th>
                  <th class="text-center">Nama Surat</th>          
                  <th class="text-center">Option</th>
                </tr>
                {{-- */$x=0;/* --}}
                @foreach ($tafsirs as $tafsir)
                {{-- */$x++;/* --}}
                <tr>
                  <td class="text-center">{{ $tafsir->id }}</td>
                  <td><a href="{{ url('administrator/tafsirs',$tafsir->id) }}">{{ $tafsir->nama_surat }} <h4>{{ $tafsir->arab_surat }}</h4> {{ $tafsir->arti_surat }}</a></td>
                  <div>
                    <td class="text-center">
                      <a class="btn btn-info" href="{{ action('TafsirsController@edit', $tafsir->id) }}"><i class="fa fa-pencil"></i> Edit</a>

                      {!! Form::open(['action' => ['TafsirsController@destroy', $tafsir->id], 'method' => 'DELETE','style' => 'display:inline']) !!}
                      <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                      {!! Form::close() !!}
                    </td>
                  </div>
                </tr>
                @endforeach
              </table>
              {!! $tafsirs->render() !!}
            <input id="direction" type="hidden" value="asc" />

            </div>
            @else
   <div class="card-panel red darken-3 white-text">Oops.. Data</b> Tidak Ditemukan</div>
@endif

@if (count($surahs))
<div class="table-responsive">
              <table class="table table-hover">                
                <tr>
                  <th class="text-center"><a href="" id="id">No Surat<i id="ic-direction"></i></a></th>
                  <th class="text-center">Nama Surat</th>          
                </tr>
                {{-- */$x=0;/* --}}
                @foreach ($surahs as $surah)
                {{-- */$x++;/* --}}
                <tr>
                  <td class="text-center">{{ $surah->id }}</td>
                  <td><a href="{{ url('/surahs',$surah->id) }}">{{ $surah->nama_surat }} <h4>{{ $surah->arab_surat }}</h4> {{ $surah->arti_surat }}</a></td>
                </tr>
                @endforeach
              </table>
             
            <input id="direction" type="hidden" value="asc" />

            </div>
            @else
   <div class="card-panel red darken-3 white-text">Oops.. Data</b> Tidak Ditemukan</div>
@endif

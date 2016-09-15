@extends('layouts.app')

@section('content')

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
               
@stop
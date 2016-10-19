@extends('layouts.apppublic')

@section('content')
<div class="right_col" role="main">
  <div class="row">
    <div class="page-title">
      <div class="title_left">
        <h3>Surat</h3>
      </div>
    </div>
   
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="visible-lg-inline visible-md-inline">Surat</h3>
          
        </div>
        <div class="panel-body">
          <div id="sidesurahs-list"> 
            @include('public/surahs.list_surahs')
          </div>
        </div>
      </div>

      <!-- ================================================== -->
    </div>
  </div>
</div>
<script src="/assets/jquery/jquery.min.js"></script>
<script src="/assets/js/ajax-customsidenavsurat.js"></script>
@endsection

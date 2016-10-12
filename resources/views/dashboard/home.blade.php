@extends('layouts.application')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
          
          <h3>Dashboard</h3>
          <div class="panel panel-default">
          <div class="panel-body">
                    <b> Welcome {{Auth::user()->name }}!</b> You are logged in
                </div>
            </div>
          </div>
          <br/>
          <img src="../assets/images/quran_logo.png" class="img-responsive center-block" alt="Responsive image" width=50% height="auto">
        </div>
        <!-- /page content --> 
        <script src="/assets/jquery/jquery.min.js"></script>
@endsection



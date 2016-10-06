@extends('layouts.app')


@section('content')

<div class="row">

    <div class="col-md-8 col-md-offset-2">

        <h1 class="text-primary" style="text-align: center;">stemming</h1>

    </div>

</div>


<div class="container">

	<div class="panel panel-primary">

	  <div class="panel-heading">

	  	<div class="row">

		  <div class="col-lg-6 col-lg-offset-3">

		     {!! Form::open(array('method'=>'get','class'=>'')) !!}

		    <div class="input-group">


		      <input name="kata" value="{{ old('search') }}" type="text" class="form-control" placeholder="Search for...">

		      <span class="input-group-btn">

		        <input class="btn btn-default" type="submit" value="GO!">

		      </span>


		    </div><!-- /input-group -->

		     {!! Form::close() !!}

		  </div><!-- /.col-lg-6 -->

		</div><!-- /.row -->

	  </div>

	  <div class="panel-body">


	    	

	    	<div class="row">

		  		<div class="col-lg-6">
		  		@if(!empty($output))

			    	
			    			<p>{{ $output }}</p>

			    	

			    	@endif

		  		</div>

		  	</div>


	  </div>

	</div>

</div>

@endsection
@extends('layouts.application')

@section('content')
<div class="right_col" role="main">
	<!-- {!! Form::open(['url' => 'administrator/surahs']) !!} -->
	<div class="page-title">
		<div class="title_left">
			<h3>Tambah Kata dasar</h3>
		</div>
	</div>
	<hr>
	<ol class="breadcrumb">
		<li><a href="{{ url('/administrator') }}">Dashboard</a></li>
		<li>Kata dasar</li>
	</ol>

	<div class="">

		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Form</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>
						</ul>
						<a href="{{ url('administrator/words/create') }}" class="btn btn-primary pull-right">
							<i class="fa fa-plus"></i> Tambah Kata dasar</a>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<center>        

								<table class="table table-bordered table-striped table-hover" style="width:50%">    
									<tr>
										<th class="text-center"><strong>No</strong></th> 
										<th class="text-center"><strong>Kata Dasar</strong></th>
									</tr>
									@foreach($words as $word)
									<tr>
										<td class="text-center">
											{{ $word->id }}
										</td>
										<td class="text-center">
											{{ $word->katadasar }}
										</td>
									</tr>
									@endforeach
								</table>

								{{ $words->links() }}
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="/assets/jquery/jquery.min.js"></script>
	@endsection
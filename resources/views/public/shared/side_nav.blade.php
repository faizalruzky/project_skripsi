<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home </a></li>
	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-book"></i> Quran <span class="fa fa-chevron-down"></span></a>
		<ul class="dropdown-menu nav child_menu" role="menu">
			<li><a href="{{url('/surahs')}}"><i class="glyphicon glyphicon-list-alt"></i> Detail Surat </a></li>
			<li><a href="{{url('/tafsirs')}}"><i class="glyphicon glyphicon-book"></i> Tafsir </a></li>
		</ul>
		
	</li>
	<li><a href="/about">About</a></li>
</div>
<div id="main">
	@yield('content')
</div>
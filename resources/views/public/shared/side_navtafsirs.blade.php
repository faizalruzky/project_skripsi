<div class="container body">
  <div class="main_container">
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0; size:12">
          <a href="#" class="site_title"><i class="glyphicon glyphicon-list-alt"></i><span>Surat</span></a>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 form-group top_search">
          <div class="input-group">
            <input class="form-control" type="search" id="keywords" placeholder="Cari..."/>
            <span class="input-group-btn">
              <button id="searchtafsirside" class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
            </span>
          </div>
        </div>
        <div class="clearfix"></div>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
         <div style="overflow:scroll;height:1000px;border:0 solid transparent; ">
           <div id="sidetafsirs-list">
            @include('public/tafsirs.list_surahs')
          </div>
        </div>
      </div>
      <!-- /sidebar menu -->
    </div>
  </div>
  <!-- top navigation -->
  <div class="top_nav">
    <div class="nav_menu">
      <nav>
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <!-- <span class="pull-right" style="font-size:30px;cursor:pointer;margin-right:10px" onclick="openNav()"><i class="glyphicon glyphicon-menu-left"></i></span> -->
          <li><a href="{{ url('/about') }}"><i class="fa fa-info"></i> About</a></li>
          <li class="">
           <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
             
             <i class="glyphicon glyphicon-book"></i> Tafsir<span class=" fa fa-angle-down"></span></a>
             <ul class="dropdown-menu dropdown-usermenu pull-right">
               <li><a href="{{ url('/tafsirs') }}"><i class="glyphicon glyphicon-book"></i> Quraish SHihab</a></li>
               <li><a href="{{ url('/jalalayn') }}"><i class="glyphicon glyphicon-book"></i> Jalalayn</a></li>
             </ul>
           </li>
           <li><a href="{{ url('/surahs') }}"><i class="fa fa-book"></i> Qur'an</a></li>
           <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
         </ul>
       </nav>
     </div>
   </div>
   @yield("content")
   <!-- /top navigation -->
 </div>
</div>
<script src="/assets/js/ajax-customsidenavtafsir.js"></script>
<script src="/assets/jquery/jquery.min.js"></script>
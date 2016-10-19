<div class="container body">
  <div class="main_container">
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0; size:12">
          <a href="#" class="site_title"><i class="glyphicon glyphicon-list-alt"></i><span>Surat</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
             <!-- <ul class="nav side-menu">
              <li><a href="#"><i class="fa fa-book"></i> Surat</a>
              </li>
             
            </ul> -->
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
             <li><a href="{{ url('/tafsirs') }}"><i class="glyphicon glyphicon-book"></i> Tafsir</a></li>
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
<div class="container body">
  <div class="main_container">
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0; size:12">
          <a href="#" class="site_title"><i class="fa fa-user"></i><span>Dashboard Admin</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile">
          <div class="profile_pic">
            <img src="../../../../assets/images/picture.jpg" alt="..." class="img-circle profile_img">
          </div>
          <div class="profile_info">
            <span>Welcome,</span>
            <h2>{{Auth::user()->name }}</h2>
          </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <ul class="nav side-menu">
              <h3>General</h3>
              <li><a href="/administrator"><i class="fa fa-home"></i> Home</a>
              </li>
              <li><a><i class="fa fa-book"></i> Quran <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="{{url('administrator/surahs')}}">Surat</a></li>
                  <li><a href="{{url('administrator/tafsirs')}}">Tafsir</a></li>
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-edit"></i> Stoplist <span class="fa"></span></a>
              </li>
              <li><a href="#"><i class="fa fa-pencil"></i> Kata dasar <span class="fa"></span></a>
              </li>
              <li><a href="#"><i class="fa fa-bar-chart-o"></i> Tfidf <span class="fa"></span></a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
          <a data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
          </a>
          <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
          </a>
          <a data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
          </a>
          <a data-toggle="tooltip" data-placement="top" title="Logout">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
          </a>
        </div>
        <!-- /menu footer buttons -->
      </div>
      </div>
      <!-- top navigation -->
      @include('dashboard/shared.top_nav')
      @yield("content")
      <!-- /top navigation -->
  </div>
</div>
<!-- jquery -->
<script src="/assets/jquery/jquery.min.js"></script>
<script src="/assets/js/ajax-custom.js"></script>
<!-- end jquery -->
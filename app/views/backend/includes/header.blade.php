            <div class="navbar-header aside bg-info dk"> 
               <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> 
                  <i class="icon-list"></i> 
               </a> 
               <a href="index-fina.html" class="navbar-brand text-lt"> 
                  <i class="icon-earphones"></i> 
                  <img src="images/logo.png" alt="." class="hide"> 
                  <span class="hidden-nav-xs m-l-sm">Modesty</span> 
               </a> 
               <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">   <i class="icon-settings"></i> 
               </a> 
            </div>
            <ul class="nav navbar-nav hidden-xs">
               <li> 
                  <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted"> 
                     <i class="fa fa-indent text"></i> 
                     <i class="fa fa-dedent text-active"></i> 
                  </a> 
               </li>
            </ul>
            <div class="navbar-form navbar-left">
               <h5>Administrator | Content Management System</h5>
            </div>
            <div class="navbar-right ">
               <ul class="nav navbar-nav m-n hidden-xs nav-user user">
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown"> 
                        <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm"> <img src="{{ asset('assets/image/'.Auth::user()->user_image)}}" alt="..."> </span> {{ Auth::user()->user_name }} 
                        <b class="caret"></b> 
                     </a> 
                     <ul class="dropdown-menu animated fadeInRight">
                        <li> 
                           <span class="arrow top"></span> 
                           <a href="#">Settings</a> 
                        </li>
                        <li> 
                           <a href="profile.html">Profile</a> 
                        </li>
                        <li> 
                           <a href="#"> 
                              <span class="badge bg-danger pull-right">3</span> Notifications 
                           </a> 
                        </li>
                        <li> 
                           <a href="docs.html">Help</a> 
                        </li>
                        <li class="divider"></li>
                        <li> 
                           <a href="{{ URL::to('logout') }}">Logout</a> 
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
                           <nav class="nav-primary hidden-xs">
                              <ul class="nav" data-ride="collapse">
                                 <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted"> 
                                    Navigations 
                                 </li>
                                 <li >
                                    <a href="{{url ('backend')}}" class="auto"> 
                                       <span class="pull-right text-muted"> 
                                          <i class="fa fa-angle-left text"></i> 
                                          <i class="fa fa-angle-down text-active"></i> 
                                       </span> 
                                       <i class="icon-screen-desktop icon"> </i> 
                                       <span>Dashboard</span> 
                                    </a> 
                                    
                                 </li>
                                 @if(Auth::user()->user_status==1)
                                 <li>
                                    <a href="#" class="auto"> 
                                       <span class="pull-right text-muted"> 
                                          <i class="fa fa-angle-left text"></i> 
                                          <i class="fa fa-angle-down text-active"></i> 
                                       </span> 
                                       <i class="icon-user-following icon"> </i> 
                                       <span>MANAGE USERS</span> 
                                    </a> 
                                    <ul class="nav dk text-sm">
                                       <li > 
                                          <a href="{{url('user/create')}}" class="auto"> 
                                             <i class="fa fa-angle-right text-xs"></i> 
                                             <span>Create User</span> 
                                          </a> 
                                       </li>
                                       <li > 
                                          <a href="{{url('user')}}" class="auto"> 
                                             <b class="badge bg-info pull-right"></b> 
                                             <i class="fa fa-angle-right text-xs"></i> 
                                             <span>List user</span> 
                                          </a> 
                                       </li>
                                    </ul>
                                 </li>
                                 @endif
                                 <li>
                                    <a href="#" class="auto"> 
                                       <span class="pull-right text-muted"> 
                                          <i class="fa fa-angle-left text"></i> 
                                          <i class="fa fa-angle-down text-active"></i> 
                                       </span> 
                                       <i class="icon-globe-alt icon"> </i> 
                                       <span>CATEGORIES</span> 
                                    </a> 
                                    <ul class="nav dk text-sm">
                                       <li > 
                                          <a href="{{url('category/create')}}" class="auto"> 
                                             <i class="fa fa-angle-right text-xs"></i> 
                                             <span>Create Category</span> 
                                          </a> 
                                       </li>
                                       <li > 
                                          <a href="{{url('category')}}" class="auto"> 
                                             <b class="badge bg-info pull-right"></b> 
                                             <i class="fa fa-angle-right text-xs"></i> 
                                             <span>List Categories</span> 
                                          </a> 
                                       </li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="#" class="auto"> 
                                       <span class="pull-right text-muted"> 
                                          <i class="fa fa-angle-left text"></i> 
                                          <i class="fa fa-angle-down text-active"></i> 
                                       </span> 
                                       <i class="icon-paper-plane icon"> </i> 
                                       <span>MANAGE NEWS</span> 
                                    </a> 
                                    <ul class="nav dk text-sm">
                                       <li > 
                                          <a href="{{url('news/create')}}" class="auto"> 
                                             <i class="fa fa-angle-right text-xs"></i> 
                                             <span>Create Tags</span> 
                                          </a> 
                                       </li>
                                       <li > 
                                          <a href="{{url('news')}}" class="auto"> 
                                             <b class="badge bg-info pull-right"></b> 
                                             <i class="fa fa-angle-right text-xs"></i> 
                                             <span>List Tags</span> 
                                          </a> 
                                       </li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="#" class="auto"> 
                                       <span class="pull-right text-muted"> 
                                          <i class="fa fa-angle-left text"></i> 
                                          <i class="fa fa-angle-down text-active"></i> 
                                       </span> 
                                       <i class="icon-tag icon"> </i> 
                                       <span>MANAGE TAGS</span> 
                                    </a> 
                                    <ul class="nav dk text-sm">
                                       <li > 
                                          <a href="{{url('tags/create')}}" class="auto"> 
                                             <i class="fa fa-angle-right text-xs"></i> 
                                             <span>Create Tags</span> 
                                          </a> 
                                       </li>
                                       <li > 
                                          <a href="{{url('tags')}}" class="auto"> 
                                             <b class="badge bg-info pull-right"></b> 
                                             <i class="fa fa-angle-right text-xs"></i> 
                                             <span>List Tags</span> 
                                          </a> 
                                       </li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="#" class="auto"> 
                                       <span class="pull-right text-muted"> 
                                          <i class="fa fa-angle-left text"></i> 
                                          <i class="fa fa-angle-down text-active"></i> 
                                       </span> 
                                       <i class="fa fa-comments-o"> </i> 
                                       <span>COMMAND</span> 
                                    </a> 
                                    <ul class="nav dk text-sm">
                                       <li > 
                                          <a href="{{url('command/create')}}" class="auto"> 
                                             <i class="fa fa-angle-right text-xs"></i> 
                                             <span>Create command</span> 
                                          </a> 
                                       </li>
                                       <li > 
                                          <a href="{{url('command')}}" class="auto"> 
                                             <b class="badge bg-info pull-right"></b> 
                                             <i class="fa fa-angle-right text-xs"></i> 
                                             <span>List command</span> 
                                          </a> 
                                       </li>
                                    </ul>
                                 </li>
                                 <li >
                                    <a href="{{url ('backend/form')}}" class="auto"> 
                                       <span class="pull-right text-muted"> 
                                          <i class="fa fa-angle-left text"></i> 
                                          <i class="fa fa-angle-down text-active"></i> 
                                       </span> 
                                       <i class="icon-docs icon"> </i> 
                                       <span>Form</span> 
                                    </a> 
                                    
                                 </li>
                                 <li >
                                    <a href="{{url('backend/table')}}" class="auto"> 
                                       <span class="pull-right text-muted"> 
                                          <i class="fa fa-angle-left text"></i> 
                                          <i class="fa fa-angle-down text-active"></i> 
                                       </span> 
                                       <i class="icon-notebook icon"> </i> 
                                       <span>Static Table</span> 
                                    </a> 
                                 </li>
                                 
                                 <li >
                                    <a href="#" class="auto"> 
                                       <span class="pull-right text-muted"> 
                                          <i class="fa fa-angle-left text"></i> 
                                          <i class="fa fa-angle-down text-active"></i> 
                                       </span> 
                                       <i class="icon-grid icon"> </i> 
                                       <span>Pages</span> 
                                    </a> 
                                    <ul class="nav dk text-sm">
                                       <li> 
                                          <a href="profile.html" class="auto"> 
                                             <i class="fa fa-angle-right text-xs"></i> 
                                             <span>Profile</span> 
                                          </a> 
                                       </li>
                                       <li > 
                                          <a href="blog.html" class="auto"> 
                                             <i class="fa fa-angle-right text-xs"></i> 
                                             <span>Blog</span> 
                                          </a> 
                                       </li>
                                       <li > 
                                          <a href="invoice.html" class="auto"> 
                                             <i class="fa fa-angle-right text-xs"></i> 
                                             <span>Invoice</span> 
                                          </a> 
                                       </li>
                                       <li > 
                                          <a href="gmap.html" class="auto"> 
                                             <i class="fa fa-angle-right text-xs"></i> 
                                             <span>Google Map</span> 
                                          </a> 
                                       </li>
                                       <li > 
                                          <a href="jvectormap.html" class="auto"> 
                                             <i class="fa fa-angle-right text-xs"></i> 
                                             <span>Vector Map</span> 
                                          </a> 
                                       </li>
                                       <li > 
                                          <a href="signin.html" class="auto"> 
                                             <i class="fa fa-angle-right text-xs"></i> 
                                             <span>Signin</span> 
                                          </a> 
                                       </li>
                                       <li> 
                                          <a href="signup.html" class="auto"> 
                                             <i class="fa fa-angle-right text-xs"></i> 
                                             <span>Signup</span> 
                                          </a> 
                                       </li>
                                       <li> 
                                          <a href="404.html" class="auto"> 
                                             <i class="fa fa-angle-right text-xs"></i> 
                                             <span>404</span> 
                                          </a> 
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </nav>
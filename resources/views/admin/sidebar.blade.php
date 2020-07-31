<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <p class="name">{{Auth::user()->name}}</p>
            <span class="online"></span>
          </div> 
          <ul class="nav">
          @can('dashboard_access')
            <li class="nav-item">
              <a class="nav-link" href="{{ route("admin.home") }}">
                <img src="{{ URL::asset('admins/images/icons/1.png') }}" alt="">
                 <span class="menu-title">Dashboard</span>
              </a>
            </li>
          @endcan
          @can('user_management_access')
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#pages" aria-expanded="false" aria-controls="sample-pages">
                <img src="{{ URL::asset('admins/images/icons/9.png')}}" alt="">
                <span class="menu-title">User Manage<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="pages">
                <ul class="nav flex-column sub-menu">
                @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa fa-flash (alias)">

                                    </i>
                                     <span class="menu-title">{{ trans('cruds.permission.title') }}</span>
                                </a>
                            </li>
                @endcan
                @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa fa-cog">

                                    </i>
                                     <span class="menu-title">{{ trans('cruds.role.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa fa-group (alias)">

                                    </i>
                                     <span class="menu-title">{{ trans('cruds.user.title') }}</span>
                                </a>
                            </li>
                        @endcan
                     
                </ul>
              </div>
            </li>
            @endcan
            @can('event_create')
            <li class="nav-item">
              <a class="nav-link" href="{{ route("admin.events.index") }}">
                <img src="{{ URL::asset('admins/images/icons/4.png') }}" alt="">
                <span class="menu-title">Manage Events</span>
              </a>
            </li>
            @endcan
            @can('create_media')
            <li class="nav-item">
              <a class="nav-link" href="{{ route("admin.media.index") }}">
                <img src="{{ URL::asset('admins/images/icons/2.png') }}" alt="">
                <span class="menu-title">Manage Media</span>
              </a>
            </li>
          @endcan
          @can('institute_access')
            <li class="nav-item">
              <a class="nav-link" href="{{ route("admin.institutions.index") }}">
                <img src="{{ URL::asset('admins/images/icons/2.png') }}" alt="">
                <span class="menu-title">Manage Institutions</span>
              </a>
            </li>
          @endcan
          @can('corporate_bodies_access')
            <li class="nav-item">
              <a class="nav-link" href="{{ route("admin.corporate_bodies.index") }}">
                <img src="{{ URL::asset('admins/images/icons/2.png') }}" alt="">
                <span class="menu-title">Manage Corporate Bodies</span>
              </a>
            </li>
          @endcan
          @can('category_access')
                <li class="nav-item">
                    <a href="{{ route("admin.categories.index") }}" class="nav-link {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : '' }}">
                        <i class="fa fa-navicon (alias)">

                        </i>
                        <span class="menu-title"> {{ trans('cruds.category.title') }}</span>
                    </a>
                </li>
          @endcan
          @can('testimonial_access')
                <li class="nav-item">
                    <a href="{{ route("admin.testimonials.index") }}" class="nav-link {{ request()->is('admin/testimonials') || request()->is('admin/testimonials/*') ? 'active' : '' }}">
                        <i class="fa fa-navicon (alias)">

                        </i>
                        <span class="menu-title"> Manage Testimonials</span>
                                          </a>
                </li>
          @endcan
         
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
                <img src="{{ URL::asset('admins/images/icons/9.png')}}" alt="">
                <span class="menu-title">Manage Pages<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="sample-pages">
                <ul class="nav flex-column sub-menu">
               
                            <li class="nav-item">
                                <a href="{{ route("admin.homepage") }}" class="nav-link {{ request()->is('admin/manage_homepage') || request()->is('admin/manage_homepage/*') ? 'active' : '' }}">
                                    <i class="fa fa-flash (alias)">
                                    </i>
                                     <span class="menu-title">Home Page</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route("admin.about.vedanta") }}" class="nav-link {{ request()->is('admin/manage_homepage') || request()->is('admin/manage_homepage/*') ? 'active' : '' }}">
                                    <i class="fa fa-flash (alias)">
                                    </i>
                                    <span class="menu-title"> About Vedanta</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route("admin.about.sunandaji") }}" class="nav-link {{ request()->is('admin/about_sunandaji') || request()->is('admin/about_sunandaji/*') ? 'active' : '' }}">
                                    <i class="fa fa-flash (alias)">
                                    </i>
                                    <span class="menu-title"> About Sunandaji</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route("admin.about.media") }}" class="nav-link {{ request()->is('admin/manage_media') || request()->is('admin/manage_media/*') ? 'active' : '' }}">
                                    <i class="fa fa-flash (alias)">
                                    </i>
                                  <span class="menu-title"> Media</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route("admin.about.swamiji") }}" class="nav-link {{ request()->is('admin/about_swamiji') || request()->is('admin/about_swamiji/*') ? 'active' : '' }}">
                                    <i class="fa fa-flash (alias)">
                                    </i>
                                    <span class="menu-title"> About Swami Ji</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route("admin.about.events") }}" class="nav-link {{ request()->is('admin/about_events') || request()->is('admin/about_events/*') ? 'active' : '' }}">
                                    <i class="fa fa-flash (alias)">
                                    </i>
                                     <span class="menu-title">Events</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route("admin.courses") }}" class="nav-link {{ request()->is('admin/courses') || request()->is('admin/courses/*') ? 'active' : '' }}">
                                    <i class="fa fa-flash (alias)">
                                    </i>
                                     <span class="menu-title">Courses</span>
                                </a>
                            </li>
                </ul>
              </div>
            </li>
            @can('page_access')
                <li class="nav-item">
                    <a href="{{ route("admin.pages.index") }}" class="nav-link ">
                    <img src="{{ URL::asset('admins/images/icons/9.png')}}" alt="">
                    <span class="menu-title">    Add New Page</span>
                    </a>
                </li>
            @endcan
          </ul>
        </nav>

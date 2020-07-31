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
         
         
          @can('category_access')
                <li class="nav-item">
                    <a href="{{ route("admin.categories.index") }}" class="nav-link {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : '' }}">
                        <i class="fa fa-navicon (alias)">

                        </i>
                        <span class="menu-title"> {{ trans('cruds.category.title') }}</span>
                    </a>
                </li>
          @endcan

                       
                </ul>
              </div>
            </li>
         
          </ul>
        </nav>

<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset('admin_assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Admin</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
          
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class=" treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>Quản lý tài khoản</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href="{{route('admin.admin.index')}}"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                <li><a href="{{route('admin.admin.create')}}"><i class="fa fa-circle-o"></i> Thêm</a></li>
              </ul>
            </li>
            
        </ul>
    </section>
<!-- /.sidebar -->
</aside>
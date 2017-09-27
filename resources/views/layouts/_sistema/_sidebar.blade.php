<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

            @foreach(Module::getByStatus(1) as $mod)
                @if($mod->getName() == 'Blog')
                    @include('blog::_includes._menu')
                @endif
            @endforeach

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
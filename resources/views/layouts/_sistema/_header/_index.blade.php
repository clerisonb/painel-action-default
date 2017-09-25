<!-- Main Header -->
<header class="main-header">

  <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>!</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Action</b> ST</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                  @include('layouts._sistema._header._notificacoes')
                  
                  @include('layouts._sistema._header._usuario')

            </ul>
        </div>
    </nav>
</header>
<li class="header">MENU</li>
  <!-- Optionally, you can add icons to the links -->
  <!--<li><a href="#"><i class="fa fa-link"></i> <span>Publicacoes</span></a></li>-->
  <li class="treeview">
      <a href="#"><i class="fa  fa-newspaper-o"></i> <span>Posts</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ route('post.add') }}"><i class="fa  fa-circle-o"></i> Novo </a></li>
        <li><a href="{{ route('post.list') }}"><i class="fa  fa-circle-o"></i> Todos</a></li>
      </ul>
  </li>
  <li class="treeview">
      <a href="#"><i class="fa  fa-folder-o"></i> <span>Categoria</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa  fa-circle-o"></i> Novo</a></li>
        <li><a href="{{ route('category.list') }}"><i class="fa  fa-circle-o"></i> Todos</a></li>
      </ul>
  </li>
  <li><a href="#"><i class="fa  fa-commenting"></i> <span>Comentarios</span></a></li>
  <li><a href="#"><i class="fa  fa-book"></i> <span>Paginas</span></a></li>
   <li class="treeview">
      <a href="#"><i class="fa  fa-folder-o"></i> <span>Informacoes do site</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa  fa-circle-o"></i> Novo</a></li>
        <li><a href="{{ route('category.list') }}"><i class="fa  fa-circle-o"></i> Todos</a></li>
      </ul>
  </li>
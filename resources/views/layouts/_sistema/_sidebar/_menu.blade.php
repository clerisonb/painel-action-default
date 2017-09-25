<li class="header">MENU</li>
  <!-- Optionally, you can add icons to the links -->
  <!--<li><a href="#"><i class="fa fa-link"></i> <span>Publicacoes</span></a></li>-->
  <li class="treeview">
      <a href="#"><i class="fa  fa-newspaper-o"></i> <span>Blog</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
          <li><a href="{{ route('post.adicionar') }}"><i class="fa  fa-newspaper-o"></i> Posts </a></li>
          <li><a href="{{ route('post.listar') }}"><i class="fa  fa-folder-o"></i> Categorias</a></li>
          <li><a href="#"><i class="fa  fa-commenting"></i> <span>Comentarios</span></a></li>
      </ul>
  </li>

   <li class="treeview">
      <a href="#"><i class="fa  fa-cogs"></i> <span>Configurações</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Site</a></li>
        {{--<li><a href="{{ route('categoria.listar') }}"><i class="fa  fa-circle-o"></i> Todos</a></li>--}}
      </ul>
  </li>
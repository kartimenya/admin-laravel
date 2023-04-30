<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="nav nav-pills nav-sidebar flex-column pt-3" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{ route('admin.post.index') }}" class="nav-link">
                <i class="nav-icon fas fa-clipboard"></i>
                <p>
                  {{ __('Посты') }}
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.user.index') }}" class="nav-link">
                <i class="nav-icon fas fa-clipboard"></i>
                <p>
                  {{ __('Пользователи') }}
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.category.index') }}" class="nav-link">
                <i class="nav-icon fa fa-solid fa-clipboard-list"></i>
                <p>
                  {{ __('Категории') }}
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.tag.index') }}" class="nav-link">
                <i class="nav-icon fas fa-th-list"></i>
                <p>
                  {{ __('Теги') }}
                </p>
              </a>
            </li>
          </ul>
    </div>
    <!-- /.sidebar -->
  </aside>
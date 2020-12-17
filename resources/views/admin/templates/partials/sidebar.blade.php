<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-book-open"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Libraries <sup>ok</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="/admin/">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Authors -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.author.index') }}">
          <i class="fas fa-fw fa-user"></i>
          <span>Authors</span></a>
      </li>

      <!-- Nav Item - Books -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.book.index') }}">
          <i class="fas fa-fw fa-book"></i>
          <span>Books</span></a>
      </li>
      
      <!-- Nav Item - Books -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.borrow.index') }}">
          <i class="fas fa-fw fa-book"></i>
          <span>Books Borrow</span></a>
      </li>

      <!-- Nav Item - Users -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-users"></i>
          <span>Users</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
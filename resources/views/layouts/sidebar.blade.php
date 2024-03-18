<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Deo Airport</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">DA</a>
    </div>

    <ul class="sidebar-menu">
        @section('sidebar')
        <li class="menu-header">Dashboard</li>
        <li class="active"><a class="nav-link" href="{{ route('home') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
        @show
      </ul>
  </aside>

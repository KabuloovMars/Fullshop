<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html"> <img alt="admin/image" src="admin/assets/img/logo.png" class="header-logo" /> <span
            class="logo-name">Otika</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown active">
          <a href="#" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown">
            <a href="{{ route('viewAllOrders') }}" class="menu-toggle nav-link "><i
                data-feather="pie-chart"></i><span>All orders</span></a>
          </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="briefcase"></i><span>Category</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('addCategory') }}">Add category</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Product</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href={{ route('addViewProduct') }}>Add product</a></li>
            <li><a class="nav-link" href="{{ route('viewProduct') }}">View product</a></li>
          </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </aside>
  </div>

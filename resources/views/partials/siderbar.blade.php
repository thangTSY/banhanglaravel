<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="admin" class="brand-link">
      <img src="{{ asset('image/avt.jpg ') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SHOP-TSY</span>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('image/avt.jpg ') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Trần Đình Thắng</a>
        </div>
      </div>
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="{{ route('product.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Quản lý sản phẩm
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('client.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Quản lý khách hàng
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Quản lý tài khoản
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('category.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Category
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('menus.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Menus
              </p>
            </a>
          </li>

        </ul>
      </nav>
    </div>
  </aside>
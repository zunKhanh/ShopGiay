<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Quản trị</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('admin')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Bảng điều khiển</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Categories -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('category.index')}}" >
          <i class="fas fa-sitemap"></i>
          <span>Danh mục</span>
        </a>
    </li>
    {{-- Products --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('product.index')}}" >
          <i class="fas fa-cubes"></i>
          <span>Sản phẩm</span>
        </a>

    </li>



    {{-- Shipping --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('shipping.index')}}">
          <i class="fas fa-truck"></i>
          <span>Vận chuyển</span>
        </a>

    </li>

    <!--Orders -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('order.index')}}">
            <i class="fas fa-hammer fa-chart-area"></i>
            <span>Đơn hàng</span>
        </a>
    </li>

    <!-- Reviews -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('review.index')}}">
            <i class="fas fa-comments"></i>
            <span>Đánh giá</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->

    <!-- Posts -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('post.index')}}" >
        <i class="fas fa-fw fa-folder"></i>
        <span>Bài viết</span>
      </a>

    </li>

     <!-- Category -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('post-category.index')}}" >
          <i class="fas fa-sitemap fa-folder"></i>
          <span>Loại bài viết</span>
        </a>

      </li>

      <!-- Tags -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('post-tag.index')}}" >
            <i class="fas fa-tags fa-folder"></i>
            <span>Thẻ</span>
        </a>

    </li>
     <!-- Users -->
     <li class="nav-item">
        <a class="nav-link" href="{{route('users.index')}}">
            <i class="fas fa-users"></i>
            <span>Tài khoản</span></a>
    </li>

</ul>

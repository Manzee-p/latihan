<aside class="left-sidebar with-vertical">
      <div><!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./main/index.html" class="text-nowrap logo-img">
            <img src="{{asset('assets/backend/images/logos/dark-logo.svg') }}" class="dark-logo" alt="Logo-Dark" />
            <img src="{{asset('assets/backend/images/logos/light-logo.svg') }}" class="light-logo" alt="Logo-light" />
          </a>
          <a href="" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
            <i class="ti ti-x"></i>
          </a>
        </div>

        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
          <ul id="sidebarnav">
            <!-- ---------------------------------- -->
            <!-- Home -->
            <!-- ---------------------------------- -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <!-- ---------------------------------- -->
            <!-- Dashboard -->
            <!-- ---------------------------------- -->
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ url('admin')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Dashaboar</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('category.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-shopping-cart"></i>
                </span>
                <span class="hide-menu">Kategori</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('product.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-currency-dollar"></i>
                </span>
                <span class="hide-menu">Produk</span>
              </a>
            </li>
            <!-- ---------------------------------- -->
            <!-- Frontend page -->
            <!-- ---------------------------------- -->

            <!-- ---------------------------------- -->
            <!-- Apps -->
            <!-- ---------------------------------- -->

        <!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
      </div>
    </aside>
<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Creative Tim
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item   {{ Request::is('dashboard') ? 'active' : '' }}">
          <a class="nav-link" href="">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./user.html">
            <i class="material-icons">person</i>
            <p>User Profile</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('categories') ? 'active' : '' }} ">
          <a class="nav-link" href="{{ url('categories') }}">
            <i class="material-icons">content_paste</i>
            <p>Categories</p>
          </a>
        </li>

        <li class="nav-item {{ Request::is('add-category') ? 'active' : '' }} ">
          <a class="nav-link" href="{{ route('add.category') }}">
            <i class="material-icons">content_paste</i>
            <p>Add Categories</p>
          </a>
        </li>

        <li class="nav-item {{ Request::is('products') ? 'active' : '' }} ">
          <a class="nav-link" href="{{ route('products') }}">
            <i class="material-icons">content_paste</i>
            <p>Products</p>
          </a>
        </li>

        <li class="nav-item {{ Request::is('add-product') ? 'active' : '' }} ">
          <a class="nav-link" href="{{ route('add.product') }}">
            <i class="material-icons">content_paste</i>
            <p>Add Products</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('get-orders-admin') ? 'active' : '' }} ">
          <a class="nav-link" href="{{ route('orders.admin') }}">
            <i class="material-icons">content_paste</i>
            <p>Orders</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('all-users') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('all.users') }}">
            <i class="material-icons">library_books</i>
            <p>Users</p>
          </a>
        </li>
        {{-- <li class="nav-item ">
          <a class="nav-link" href="./icons.html">
            <i class="material-icons">bubble_chart</i>
            <p>Icons</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./map.html">
            <i class="material-icons">location_ons</i>
            <p>Maps</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./notifications.html">
            <i class="material-icons">notifications</i>
            <p>Notifications</p>
          </a>
        </li> --}}
        <!-- <li class="nav-item active-pro ">
              <a class="nav-link" href="./upgrade.html">
                  <i class="material-icons">unarchive</i>
                  <p>Upgrade to PRO</p>
              </a>
          </li> -->
      </ul>
    </div>
  </div>

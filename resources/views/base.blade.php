<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wowdash - Bootstrap 5 Admin Dashboard HTML Template</title>
  <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}" sizes="16x16">
<!-- remix icon font css  -->
<link rel="stylesheet" href="{{ asset('assets/css/remixicon.css') }}">
<!-- BootStrap css -->
<link rel="stylesheet" href="{{ asset('assets/css/lib/bootstrap.min.css') }}">
<!-- Apex Chart css -->
<link rel="stylesheet" href="{{ asset('assets/css/lib/apexcharts.css') }}">
<!-- Data Table css -->
<link rel="stylesheet" href="{{ asset('assets/css/lib/dataTables.min.css') }}">
<!-- Text Editor css -->
<link rel="stylesheet" href="{{ asset('assets/css/lib/editor-katex.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/lib/editor.atom-one-dark.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/lib/editor.quill.snow.css') }}">
<!-- Date picker css -->
<link rel="stylesheet" href="{{ asset('assets/css/lib/flatpickr.min.css') }}">
<!-- Calendar css -->
<link rel="stylesheet" href="{{ asset('assets/css/lib/full-calendar.css') }}">
<!-- Vector Map css -->
<link rel="stylesheet" href="{{ asset('assets/css/lib/jquery-jvectormap-2.0.5.css') }}">
<!-- Popup css -->
<link rel="stylesheet" href="{{ asset('assets/css/lib/magnific-popup.css') }}">
<!-- Slick Slider css -->
<link rel="stylesheet" href="{{ asset('assets/css/lib/slick.css') }}">
<!-- main css -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
  <body>
<aside class="sidebar">
  <button type="button" class="sidebar-close-btn">
    <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
  </button>
  <div>
    <a href="index.html" class="sidebar-logo">
      <img src="assets/images/logo.png" alt="site logo" class="light-logo">
      <img src="assets/images/logo-light.png" alt="site logo" class="dark-logo">
      <img src="assets/images/logo-icon.png" alt="site logo" class="logo-icon">
    </a>
  </div>
  <div class="sidebar-menu-area">
    <ul class="sidebar-menu" id="sidebar-menu">
      <li>
        <a href="{{ route('admin') }}">
          <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
          <span>Dashboard</span>
        </a>
        
      </li>
      <li class="sidebar-menu-group-title">Application</li>
      <li>
         <a href="{{ route('targets') }}">
          <iconify-icon icon="solar:document-text-outline" class="menu-icon"></iconify-icon>
          <span>Targets</span> 
        </a>
      </li>
      <li>
        <a href="email.html">
          <iconify-icon icon="mage:email" class="menu-icon"></iconify-icon>
          <span>Email</span>
        </a>
      </li>
      <li>
        <a href="chat-message.html">
          <iconify-icon icon="bi:chat-dots" class="menu-icon"></iconify-icon>
          <span>Chat</span> 
        </a>
      </li>
      <li>
        <a href="calendar-main.html">
          <iconify-icon icon="solar:calendar-outline" class="menu-icon"></iconify-icon>
          <span>Calendar</span> 
        </a>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
          <span>Invoice</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="invoice-list.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List</a>
          </li>
          <li>
            <a href="invoice-preview.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Preview</a>
          </li>
          <li>
            <a href="invoice-add.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Add new</a>
          </li>
          <li>
            <a href="invoice-edit.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Edit</a>
          </li>
        </ul>
      </li>

      <li class="sidebar-menu-group-title">Application</li> 

      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="solar:document-text-outline" class="menu-icon"></iconify-icon>
          <span>Components</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="typography.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Typography</a>
          </li>
          <li>
            <a href="colors.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Colors</a>
          </li>
          <li>
            <a href="button.html"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Button</a>
          </li>
          <li>
            <a href="dropdown.html"><i class="ri-circle-fill circle-icon text-lilac-600 w-auto"></i> Dropdown</a>
          </li>
          <li>
            <a href="alert.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Alerts</a>
          </li>
          <li>
            <a href="card.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Card</a>
          </li>
          <li>
            <a href="carousel.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Carousel</a>
          </li>
          <li>
            <a href="avatar.html"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Avatars</a>
          </li>
          <li>
            <a href="progress.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Progress bar</a>
          </li>
          <li>
            <a href="tabs.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Tab & Accordion</a>
          </li>
          <li>
            <a href="pagination.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Pagination</a>
          </li>
          <li>
            <a href="badges.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Badges</a>
          </li>
          <li>
            <a href="tooltip.html"><i class="ri-circle-fill circle-icon text-lilac-600 w-auto"></i> Tooltip & Popover</a>
          </li>
          <li>
            <a href="videos.html"><i class="ri-circle-fill circle-icon text-cyan w-auto"></i> Videos</a>
          </li>
          <li>
            <a href="star-rating.html"><i class="ri-circle-fill circle-icon text-indigo w-auto"></i> Star Ratings</a>
          </li>
          <li>
            <a href="tags.html"><i class="ri-circle-fill circle-icon text-purple w-auto"></i> Tags</a>
          </li>
          <li>
            <a href="list.html"><i class="ri-circle-fill circle-icon text-red w-auto"></i> List</a>
          </li>
          <li>
            <a href="calendar.html"><i class="ri-circle-fill circle-icon text-yellow w-auto"></i> Calendar</a>
          </li>
          <li>
            <a href="radio.html"><i class="ri-circle-fill circle-icon text-orange w-auto"></i> Radio</a>
          </li>
          <li>
            <a href="switch.html"><i class="ri-circle-fill circle-icon text-pink w-auto"></i> Switch</a>
          </li>
          <li>
            <a href="image-upload.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Upload</a>
          </li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="heroicons:document" class="menu-icon"></iconify-icon>
          <span>Forms</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="form.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Input Forms</a>
          </li>
          <li>
            <a href="form-layout.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Input Layout</a>
          </li>
          <li>
            <a href="form-validation.html"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Form Validation</a>
          </li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="mingcute:storage-line" class="menu-icon"></iconify-icon>
          <span>Table</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="table-basic.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Basic Table</a>
          </li>
          <li>
            <a href="table-data.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Data Table</a>
          </li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="solar:pie-chart-outline" class="menu-icon"></iconify-icon>
          <span>Chart</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="line-chart.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Line Chart</a>
          </li>
          <li>
            <a href="column-chart.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Column Chart</a>
          </li>
          <li>
            <a href="pie-chart.html"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Pie Chart</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="widgets.html">
          <iconify-icon icon="fe:vector" class="menu-icon"></iconify-icon>
          <span>Widgets</span> 
        </a>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="flowbite:users-group-outline" class="menu-icon"></iconify-icon>
          <span>Users</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="users-list.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Users List</a>
          </li>
          <li>
            <a href="users-grid.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Users Grid</a>
          </li>
          <li>
            <a href="add-user.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Add User</a>
          </li>
          <li>
            <a href="view-profile.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> View Profile</a>
          </li>
        </ul>
      </li>

      <li class="sidebar-menu-group-title">Application</li>

      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="simple-line-icons:vector" class="menu-icon"></iconify-icon>
          <span>Authentication</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="sign-in.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Sign In</a>
          </li>
          <li>
            <a href="sign-up.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Sign Up</a>
          </li>
          <li>
            <a href="forgot-password.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Forgot Password</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="gallery.html">
          <iconify-icon icon="solar:gallery-wide-linear" class="menu-icon"></iconify-icon>
          <span>Gallery</span> 
        </a>
      </li>
      <li>
        <a href="pricing.html">
          <iconify-icon icon="hugeicons:money-send-square" class="menu-icon"></iconify-icon>
          <span>Pricing</span> 
        </a>
      </li>
      <li>
        <a href="faq.html">
          <iconify-icon icon="mage:message-question-mark-round" class="menu-icon"></iconify-icon>
          <span>FAQs.</span> 
        </a>
      </li>
      <li>
        <a href="error.html">
          <iconify-icon icon="streamline:straight-face" class="menu-icon"></iconify-icon>
          <span>404</span> 
        </a>
      </li>
      <li>
        <a href="terms-condition.html">
          <iconify-icon icon="octicon:info-24" class="menu-icon"></iconify-icon>
          <span>Terms & Conditions</span> 
        </a>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="icon-park-outline:setting-two" class="menu-icon"></iconify-icon>
          <span>Settings</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="company.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Company</a>
          </li>
          <li>
            <a href="notification.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Notification</a>
          </li>
          <li>
            <a href="notification-alert.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Notification Alert</a>
          </li>
          <li>
            <a href="theme.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Theme</a>
          </li>
          <li>
            <a href="currencies.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Currencies</a>
          </li>
          <li>
            <a href="language.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Languages</a>
          </li>
          <li>
            <a href="payment-gateway.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Payment Gateway</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</aside>

<main class="dashboard-main">
   @yield('content') 
  <footer class="d-footer">
  <div class="row align-items-center justify-content-between">
    <div class="col-auto">
      <p class="mb-0">© 2024 WowDash. All Rights Reserved.</p>
    </div>
    <div class="col-auto">
      <p class="mb-0">Made by <span class="text-primary-600">wowtheme7</span></p>
    </div>
  </div>
</footer>
</main>
  
  <!-- jQuery library js -->
 <!-- jQuery js -->
<script src="{{ asset('assets/js/lib/jquery-3.7.1.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('assets/js/lib/bootstrap.bundle.min.js') }}"></script>
<!-- Apex Chart js -->
<script src="{{ asset('assets/js/lib/apexcharts.min.js') }}"></script>
<!-- Data Table js -->
<script src="{{ asset('assets/js/lib/dataTables.min.js') }}"></script>
<!-- Iconify Font js -->
<script src="{{ asset('assets/js/lib/iconify-icon.min.js') }}"></script>
<!-- jQuery UI js -->
<script src="{{ asset('assets/js/lib/jquery-ui.min.js') }}"></script>
<!-- Vector Map js -->
<script src="{{ asset('assets/js/lib/jquery-jvectormap-2.0.5.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- Popup js -->
<script src="{{ asset('assets/js/lib/magnifc-popup.min.js') }}"></script>
<!-- Slick Slider js -->
<script src="{{ asset('assets/js/lib/slick.min.js') }}"></script>
<!-- main js -->
<script src="{{ asset('assets/js/app.js') }}"></script>

<script src="{{ asset('assets/js/homeOneChart.js') }}"></script>
<script>
  let table = new DataTable('#dataTable');
</script>
</body>
</html>
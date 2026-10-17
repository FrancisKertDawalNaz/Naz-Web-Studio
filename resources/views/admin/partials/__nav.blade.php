@php
$notifications = auth()->user()->notifications->toArray();
@endphp

<link rel="stylesheet" href="{{ asset('css/header.css') }}?v=1">

<!-- HEADER -->
<header class="fixed-top admin-topbar">
  <div class="admin-topbar__inner d-flex justify-content-between align-items-center text-white px-3 py-2 shadow-sm">

    <!-- LEFT SIDE (Logo for desktop, Toggle for mobile) -->
    <div class="admin-topbar__brand d-flex align-items-center">
      <!-- Mobile Toggle Button -->
      <button class="admin-topbar__toggle btn d-lg-none border-0 fs-3" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#sidebar" aria-controls="sidebar" aria-label="Open navigation menu">
        <i class="bi bi-list text-white"></i>
      </button>

      <a href="{{ url('/user/home') }}"
        class="admin-topbar__brand-link d-none d-lg-flex ms-2 text-decoration-none align-items-center">
        <img src="{{ isset($appInfo->logo) ? asset('storage/' . $appInfo->logo) : asset('img/no-image-icon-4.png') }}"
          alt="{{ $appInfo->app_name ?? 'Logo' }}" class="fk-navbar__logo me-2">
        <span class="admin-topbar__brand-name">{{ $appInfo->app_name ?? '' }}</span>
      </a>
    </div>

    <!-- RIGHT SIDE NAV -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">
          <div class="d-flex align-items-center">

            {{--
            <!-- Notification Bell -->
            <a href="#notification" data-bs-toggle="modal" data-bs-target="#notificationmodal" id="notification-bell"
              class="me-4 fs-2 position-relative">
              <i class="text-white  bi bi-bell"></i>
              <span
                class="notification-bell position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                <span class="visually-hidden">New alerts</span>
              </span>
            </a> --}}

            <!-- Profile Dropdown -->
            <div class="admin-topbar__user-info">
              <span class="admin-topbar__user-name" title="{{ Auth::user()->name }}">{{ Auth::user()->name
                }}</span>
              @if (Auth::user()->position)
              <span class="admin-topbar__user-position" title="{{ Auth::user()->position }}">{{
                Auth::user()->position
                }}</span>
              @endif
            </div>
            <a class="nav-link bg-transparent border-0 text-white nav-profile admin-topbar__profile d-flex align-items-center pe-0"
              href="#" data-bs-toggle="dropdown" aria-label="Open account menu" aria-expanded="false">
              <img
                src="{{ Auth::user()->profile_img != '' ? asset('storage/' . Auth::user()->profile_img) : URL::asset('img/gray-male-icon.png') }}"
                alt="Profile" class="rounded-circle">
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile admin-topbar__menu">
              <li class="dropdown-header">
                <span>Admin Account</span>
              </li>
              @if (in_array(1002, auth()->user()->module_access()) || auth()->user()->isAdmin())
              <li>
                <a class="dropdown-item d-flex align-items-center" href="{{ url('/admin/settings') }}">
                  <i class="text-dark bi bi-gear"></i>
                  <span>Settings</span>
                </a>
              </li>
              @endif
              <li>
                <button form="logoutform" type="submit" class="dropdown-item d-flex align-items-center">
                  <i class="text-dark bi bi-box-arrow-right"></i>
                  <span>Log Out</span>
                </button>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>
  </div>
</header>

<aside id="sidebar" class="offcanvas offcanvas-start shadow" tabindex="-1" style="background-color: #0b1220;">
  <div class="offcanvas-header d-lg-none">
    <h5 class="offcanvas-title">Menu</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>

  <div class="offcanvas-body p-0">
    <ul class="sidebar-nav" id="sidebar-nav">
      @if (in_array(1, auth()->user()->module_access()) || auth()->user()->isAdmin() || auth()->user()->isSubAdmin())
      <li class="nav-item">
        <a class="nav-link bg-transparent border border-0 text-dark " href="{{ url('/admin') }}">
          <i class="text-dark bi bi-grid"></i>
          <span class="text-dark">Dashboard</span>
        </a>
      </li>
      @endif

      @if (in_array(1000, auth()->user()->module_access()) || auth()->user()->isAdmin())
      <li class="nav-item">
        <a class="nav-link bg-transparent border border-0 text-dark " href="{{ url('/admin/users_management') }}">
          <i class="text-dark bi bi-people"></i>
          <span class="text-dark">User Management</span>
        </a>
      </li>
      @endif


      <li class="nav-heading text-white fw-bold">Others</li>

      @if (in_array(1001, auth()->user()->module_access()) || auth()->user()->isAdmin())
      <li class="nav-item">
        <a class="nav-link bg-transparent border border-0 text-dark " href="{{ url('/admin/audit') }}">
          <i class="text-dark bi bi-card-list"></i>
          <span class="text-dark">Audit Trail</span>
        </a>
      </li>
      @endif
      @if (in_array(1002, auth()->user()->module_access()) || auth()->user()->isAdmin())
      <li class="nav-item">
        <a class="nav-link bg-transparent border border-0 text-dark " href="{{ url('/admin/settings') }}">
          <i class="text-dark bi bi-gear"></i>
          <span class="text-dark">Settings</span>
        </a>
      </li>
      @endif

      <li class="nav-item">
        <form action="{{ route('logout') }}" id="logoutform" method="POST">
          @csrf
        </form>
        <button form="logoutform" type="submit" class="nav-link bg-transparent border border-0 text-dark collapsed">
          <i class="text-dark bi bi-arrow-bar-left"></i>
          <span class="text-dark">Logout</span>
        </button>
      </li>
    </ul>
  </div>

</aside>
<div class="modal fade" id="notificationmodal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
  role="dialog" aria-labelledby="notificationmodalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="notificationmodalTitle">
          Notification
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="list-group list-group-flush">
          @if (!empty($notifications))
          @foreach ($notifications as $notification)
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">{{ $notification['title'] }}</h5>
              <small class="text-muted">{{ date('M/d/Y', strtotime($notification['created_at']))}}</small>
            </div>
            <p class="mb-1">{{ $notification['content'] }}</p>
          </a>
          @endforeach
          @else
          <div class="text-center">No Notification</div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
<style>
  /* ---------- Sidebar links: same flat corporate design ---------- */
  .sidebar-nav {
    font-family: 'IBM Plex Sans', 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
  }

  .sidebar-nav .nav-link {
    display: flex;
    align-items: center;
    gap: 12px;
    width: 100%;
    padding: 10px 14px;
    border-radius: 4px;
    font-size: 14px;
    font-weight: 500;
    text-align: left;
    box-shadow: none;
    transition: background-color 0.15s ease;
  }

  .sidebar-nav .nav-link i {
    font-size: 17px;
    line-height: 1;
    margin: 0;
  }

  .sidebar-nav .nav-link span {
    font-size: 14px;
  }

  /* Idle: soft white text (overrides .text-white utility) */
  .sidebar-nav .nav-link i,
  .sidebar-nav .nav-link span {
    color: rgba(255, 255, 255, 0.82) !important;
  }

  /* Hover: light translucent fill, no white block */
  .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.1) !important;
  }

  .nav-link:hover i,
  .nav-link:hover span {
    color: #fff !important;
  }

  /* Active page: slightly stronger fill + left marker */
  .nav-link.active {
    background-color: rgba(255, 255, 255, 0.16) !important;
    box-shadow: inset 3px 0 0 #fff;
  }

  .nav-link.active i,
  .nav-link.active span {
    color: #fff !important;
  }

  /* Logout set apart from page links */
  .sidebar-nav .nav-item:last-child {
    margin-top: 12px;
    padding-top: 12px;
    border-top: 1px solid rgba(255, 255, 255, 0.16);
  }

  .sidebar-nav .nav-link:focus-visible {
    outline: 2px solid rgba(255, 255, 255, 0.85);
    outline-offset: 2px;
  }

  .nav-profile:hover {
    background-color: transparent !important;
    color: white !important;
  }

  .nav-profile:hover span {
    color: white !important;
  }

  @media (min-width: 992px) {
    #sidebar {
      width: 250px;
      transition: width 0.25s ease;
    }

    #main,
    #footer {
      margin-left: 250px;
      transition: margin-left 0.25s ease, width 0.25s ease;
    }

    #sidebar.sidebar-collapsed {
      width: 72px;
    }

    body.sidebar-is-collapsed #main,
    body.sidebar-is-collapsed #footer {
      margin-left: 72px;
    }

    #sidebar.sidebar-collapsed .sidebar-toolbar {
      justify-content: center !important;
      padding-left: 0.5rem !important;
      padding-right: 0.5rem !important;
    }

    #sidebar.sidebar-collapsed .nav-link {
      position: relative;
      justify-content: center;
      gap: 0;
      padding-left: 0;
      padding-right: 0;
    }

    /* Collapsed: label becomes a tooltip */
    #sidebar.sidebar-collapsed .nav-link span {
      display: block;
      position: absolute;
      left: 58px;
      top: 50%;
      z-index: 20;
      width: max-content;
      max-width: 220px;
      padding: 6px 10px;
      border-radius: 4px;
      background: #0c2c4c;
      border: 1px solid rgba(255, 255, 255, 0.18);
      color: #fff !important;
      font-size: 13px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      opacity: 0;
      pointer-events: none;
      transform: translateY(-50%) translateX(-6px);
      transition: opacity 0.15s ease, transform 0.15s ease;
    }

    #sidebar.sidebar-collapsed .nav-link:hover span,
    #sidebar.sidebar-collapsed .nav-link:focus-visible span {
      opacity: 1;
      transform: translateY(-50%) translateX(0);
    }

    #sidebar.sidebar-collapsed .nav-link i {
      margin-right: 0;
    }
  }

  .sidebar-toolbar {
    min-height: 48px;
  }

  .sidebar-toggle-btn {
    width: 34px;
    height: 34px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    border: 1px solid rgba(255, 255, 255, 0.28);
    border-radius: 4px;
    background: rgba(255, 255, 255, 0.08);
    color: #fff;
    transition: background-color 0.15s ease, border-color 0.15s ease;
  }

  .sidebar-toggle-btn:hover,
  .sidebar-toggle-btn:focus-visible {
    background: rgba(255, 255, 255, 0.18);
    border-color: rgba(255, 255, 255, 0.55);
    color: #fff;
    outline: none;
  }

  @media (max-width: 991.98px) {
    #sidebar.offcanvas-start {
      width: 50vw !important;
      max-width: 320px;
    }
  }
</style>


<script>
  checkUnreadNotifications();

  function checkUnreadNotifications() {
    $.ajax({
      type: 'GET',
      url: '/notifications/unread', // Update this to the correct route
      success: function (response) {
        if (response.unread_count > 0) {
          // Show the notification icon with the alert badge
          $('.notification-bell').removeClass('d-none');
        } else {
          // Hide the notification icon
          $('.notification-bell').addClass('d-none');
        }
      },
      error: function (xhr, status, error) {
        console.error("Error fetching notifications: " + error);
      }
    });
  }
  $(document).on('click', '#notification-bell', function () {
    $.ajax({
      type: 'POST',
      url: '/notifications/mark-read',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Add CSRF token
      },
      success: function (response) {
        if (response.success) {
          // Optionally hide the notification alert after marking as read
          checkUnreadNotifications(); // Refresh the notification state
        }
      },
      error: function (xhr, status, error) {
        console.error("Error marking notifications as read: " + error);
      }
    });
  });
</script>
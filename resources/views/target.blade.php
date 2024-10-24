@extends('base');




@section('content')

  <div class="navbar-header">
    <div class="row align-items-center justify-content-between">
    <div class="col-auto">
      <div class="d-flex flex-wrap align-items-center gap-4">
        <button type="button" class="sidebar-toggle">
          <iconify-icon icon="heroicons:bars-3-solid" class="icon text-2xl non-active"></iconify-icon>
          <iconify-icon icon="iconoir:arrow-right" class="icon text-2xl active"></iconify-icon>
        </button>
        <button type="button" class="sidebar-mobile-toggle">
          <iconify-icon icon="heroicons:bars-3-solid" class="icon"></iconify-icon>
        </button>
        <form class="navbar-search">
          <input type="text" name="search" placeholder="Search">
          <iconify-icon icon="ion:search-outline" class="icon"></iconify-icon>
        </form>
      </div>
    </div>
    <div class="col-auto">
      <div class="d-flex flex-wrap align-items-center gap-3">
        <button type="button" data-theme-toggle class="w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"></button>
        <div class="dropdown d-none d-sm-inline-block">
          <button class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center" type="button" data-bs-toggle="dropdown">
            <img src="assets/images/lang-flag.png" alt="image" class="w-24 h-24 object-fit-cover rounded-circle">
          </button>
          <div class="dropdown-menu to-top dropdown-menu-sm">
            <div class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
              <div>
                <h6 class="text-lg text-primary-light fw-semibold mb-0">Choose Your Language</h6>
              </div>
            </div>

            <div class="max-h-400-px overflow-y-auto scroll-sm pe-8">
              <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="english"> 
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                    <img src="assets/images/flags/flag1.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">English</span>
                  </span>
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="english">
              </div>
  
              <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="japan"> 
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                    <img src="assets/images/flags/flag2.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">Japan</span>
                  </span>  
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="japan">
              </div>
              
              <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="france"> 
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                    <img src="assets/images/flags/flag3.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">France</span>
                  </span>  
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="france">
              </div>
              
              <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="germany"> 
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                    <img src="assets/images/flags/flag4.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">Germany</span>
                  </span>  
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="germany">
              </div>
              
              <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="korea"> 
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                    <img src="assets/images/flags/flag5.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">South Korea</span>
                  </span>  
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="korea">
              </div>
              
              <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="bangladesh"> 
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                    <img src="assets/images/flags/flag6.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">Bangladesh</span>
                  </span>  
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="bangladesh">
              </div>
              
              <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="india"> 
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                    <img src="assets/images/flags/flag7.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">India</span>
                  </span>  
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="india">
              </div>
              <div class="form-check style-check d-flex align-items-center justify-content-between">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="canada"> 
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                    <img src="assets/images/flags/flag8.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">Canada</span>
                  </span>  
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="canada">
              </div>
            </div>
          </div>
        </div><!-- Language dropdown end -->

        <div class="dropdown">
          <button class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center" type="button" data-bs-toggle="dropdown">
            <iconify-icon icon="mage:email" class="text-primary-light text-xl"></iconify-icon>
          </button>
          <div class="dropdown-menu to-top dropdown-menu-lg p-0">
            <div class="m-16 py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
              <div>
                <h6 class="text-lg text-primary-light fw-semibold mb-0">Message</h6>
              </div>
              <span class="text-primary-600 fw-semibold text-lg w-40-px h-40-px rounded-circle bg-base d-flex justify-content-center align-items-center">05</span>
            </div>
            
           <div class="max-h-400-px overflow-y-auto scroll-sm pe-4">
            
            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                  <img src="assets/images/notification/profile-3.png" alt="">
                  <span class="w-8-px h-8-px bg-success-main rounded-circle position-absolute end-0 bottom-0"></span>
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there i’m...</p>
                </div>
              </div>
              <div class="d-flex flex-column align-items-end"> 
                <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                <span class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-warning-main rounded-circle">8</span>
              </div>
            </a>

            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                  <img src="assets/images/notification/profile-4.png" alt="">
                  <span class="w-8-px h-8-px  bg-neutral-300 rounded-circle position-absolute end-0 bottom-0"></span>
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there i’m...</p>
                </div>
              </div>
              <div class="d-flex flex-column align-items-end"> 
                <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                <span class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-warning-main rounded-circle">2</span>
              </div>
            </a>

            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                  <img src="assets/images/notification/profile-5.png" alt="">
                  <span class="w-8-px h-8-px bg-success-main rounded-circle position-absolute end-0 bottom-0"></span>
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there i’m...</p>
                </div>
              </div>
              <div class="d-flex flex-column align-items-end"> 
                <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                <span class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-neutral-400 rounded-circle">0</span>
              </div>
            </a>

            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                  <img src="assets/images/notification/profile-6.png" alt="">
                  <span class="w-8-px h-8-px bg-neutral-300 rounded-circle position-absolute end-0 bottom-0"></span>
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there i’m...</p>
                </div>
              </div>
              <div class="d-flex flex-column align-items-end"> 
                <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                <span class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-neutral-400 rounded-circle">0</span>
              </div>
            </a>

            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                  <img src="assets/images/notification/profile-7.png" alt="">
                  <span class="w-8-px h-8-px bg-success-main rounded-circle position-absolute end-0 bottom-0"></span>
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there i’m...</p>
                </div>
              </div>
              <div class="d-flex flex-column align-items-end"> 
                <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                <span class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-warning-main rounded-circle">8</span>
              </div>
            </a>

           </div>
            <div class="text-center py-12 px-16"> 
                <a href="javascript:void(0)" class="text-primary-600 fw-semibold text-md">See All Message</a>
            </div>
          </div>
        </div><!-- Message dropdown end -->

        <div class="dropdown">
          <button class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center" type="button" data-bs-toggle="dropdown">
            <iconify-icon icon="iconoir:bell" class="text-primary-light text-xl"></iconify-icon>
          </button>
          <div class="dropdown-menu to-top dropdown-menu-lg p-0">
            <div class="m-16 py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
              <div>
                <h6 class="text-lg text-primary-light fw-semibold mb-0">Notifications</h6>
              </div>
              <span class="text-primary-600 fw-semibold text-lg w-40-px h-40-px rounded-circle bg-base d-flex justify-content-center align-items-center">05</span>
            </div>
            
           <div class="max-h-400-px overflow-y-auto scroll-sm pe-4">
            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-44-px h-44-px bg-success-subtle text-success-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                  <iconify-icon icon="bitcoin-icons:verify-outline" class="icon text-xxl"></iconify-icon>
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Congratulations</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-200-px">Your profile has been Verified. Your profile has been Verified</p>
                </div>
              </div>
              <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
            </a>
            
            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-44-px h-44-px bg-success-subtle text-success-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                  <img src="assets/images/notification/profile-1.png" alt="">
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Ronald Richards</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-200-px">You can stitch between artboards</p>
                </div>
              </div>
              <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
            </a>
            
            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-44-px h-44-px bg-info-subtle text-info-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                  AM
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Arlene McCoy</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-200-px">Invite you to prototyping</p>
                </div>
              </div>
              <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
            </a>

            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-44-px h-44-px bg-success-subtle text-success-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                  <img src="assets/images/notification/profile-2.png" alt="">
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Annette Black</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-200-px">Invite you to prototyping</p>
                </div>
              </div>
              <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
            </a>

            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-44-px h-44-px bg-info-subtle text-info-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                  DR
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Darlene Robertson</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-200-px">Invite you to prototyping</p>
                </div>
              </div>
              <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
            </a>
           </div>

            <div class="text-center py-12 px-16"> 
                <a href="javascript:void(0)" class="text-primary-600 fw-semibold text-md">See All Notification</a>
            </div>

          </div>
        </div><!-- Notification dropdown end -->

        <div class="dropdown">
          <button class="d-flex justify-content-center align-items-center rounded-circle" type="button" data-bs-toggle="dropdown">
            <img src="assets/images/user.png" alt="image" class="w-40-px h-40-px object-fit-cover rounded-circle">
          </button>
          <div class="dropdown-menu to-top dropdown-menu-sm">
            <div class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
              <div>
                <h6 class="text-lg text-primary-light fw-semibold mb-2">Shaidul Islam</h6>
                <span class="text-secondary-light fw-medium text-sm">Admin</span>
              </div>
              <button type="button" class="hover-text-danger">
                <iconify-icon icon="radix-icons:cross-1" class="icon text-xl"></iconify-icon> 
              </button>
            </div>
            <ul class="to-top-list">
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3" href="view-profile.html"> 
                <iconify-icon icon="solar:user-linear" class="icon text-xl"></iconify-icon>  My Profile</a>
              </li>
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3" href="email.html"> 
                <iconify-icon icon="tabler:message-check" class="icon text-xl"></iconify-icon>  Inbox</a>
              </li>
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3" href="company.html"> 
                <iconify-icon icon="icon-park-outline:setting-two" class="icon text-xl"></iconify-icon>  Setting</a>
              </li>
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-danger d-flex align-items-center gap-3" href="javascript:void(0)"> 
                <iconify-icon icon="lucide:power" class="icon text-xl"></iconify-icon>  Log Out</a>
              </li>
            </ul>
          </div>
        </div><!-- Profile dropdown end -->
      </div>
    </div>
    </div>    
    </div> 
  
  <div class="dashboard-main-body">
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
      <h6 class="fw-semibold mb-0">Dashboard</h6>
      <ul class="d-flex align-items-center gap-2">
        <li class="fw-medium">
          <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
            <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
            Dashboard
          </a>
        </li>
        <li>-</li>
        <li class="fw-medium">AI</li>
      </ul>
    </div>

    <div class="row row-cols-xxxl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-4">
      <div class="col">
        <div class="card shadow-none border bg-gradient-start-1 h-100">
          <div class="card-body p-20">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
              <div>
                <p class="fw-medium text-primary-light mb-1">Total Users</p>
                <h6 class="mb-0">20,000</h6>
              </div>
              <div class="w-50-px h-50-px bg-cyan rounded-circle d-flex justify-content-center align-items-center">
                <iconify-icon icon="gridicons:multiple-users" class="text-white text-2xl mb-0"></iconify-icon>
              </div>
            </div>
            <p class="fw-medium text-sm text-primary-light mt-12 mb-0">
              <span class="text-success-main"><iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +5000</span> 
              Last 30 days users
            </p>
          </div>
        </div><!-- card end -->
      </div>
      <div class="col">
        <div class="card shadow-none border bg-gradient-start-2 h-100">
          <div class="card-body p-20">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
              <div>
                <p class="fw-medium text-primary-light mb-1">Total Subscription</p>
                <h6 class="mb-0">15,000</h6>
              </div>
              <div class="w-50-px h-50-px bg-purple rounded-circle d-flex justify-content-center align-items-center">
                <iconify-icon icon="fa-solid:award" class="text-white text-2xl mb-0"></iconify-icon>
              </div>
            </div>
            <p class="fw-medium text-sm text-primary-light mt-12 mb-0">
              <span class="text-danger-main"><iconify-icon icon="bxs:down-arrow" class="text-xs"></iconify-icon> -800</span> 
              Last 30 days subscription
            </p>
          </div>
        </div><!-- card end -->
      </div>
      <div class="col">
        <div class="card shadow-none border bg-gradient-start-3 h-100">
          <div class="card-body p-20">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
              <div>
                <p class="fw-medium text-primary-light mb-1">Total Free Users</p>
                <h6 class="mb-0">5,000</h6>
              </div>
              <div class="w-50-px h-50-px bg-info rounded-circle d-flex justify-content-center align-items-center">
                <iconify-icon icon="fluent:people-20-filled" class="text-white text-2xl mb-0"></iconify-icon>
              </div>
            </div>
            <p class="fw-medium text-sm text-primary-light mt-12 mb-0">
              <span class="text-success-main"><iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +200</span> 
              Last 30 days users
            </p>
          </div>
        </div><!-- card end -->
      </div>
      <div class="col">
        <div class="card shadow-none border bg-gradient-start-4 h-100">
          <div class="card-body p-20">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
              <div>
                <p class="fw-medium text-primary-light mb-1">Total Income</p>
                <h6 class="mb-0">$42,000</h6>
              </div>
              <div class="w-50-px h-50-px bg-success-main rounded-circle d-flex justify-content-center align-items-center">
                <iconify-icon icon="solar:wallet-bold" class="text-white text-2xl mb-0"></iconify-icon>
              </div>
            </div>
            <p class="fw-medium text-sm text-primary-light mt-12 mb-0">
              <span class="text-success-main"><iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +$20,000</span> 
              Last 30 days income
            </p>
          </div>
        </div><!-- card end -->
      </div>
      <div class="col">
        <div class="card shadow-none border bg-gradient-start-5 h-100">
          <div class="card-body p-20">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
              <div>
                <p class="fw-medium text-primary-light mb-1">Total Expense</p>
                <h6 class="mb-0">$30,000</h6>
              </div>
              <div class="w-50-px h-50-px bg-red rounded-circle d-flex justify-content-center align-items-center">
                <iconify-icon icon="fa6-solid:file-invoice-dollar" class="text-white text-2xl mb-0"></iconify-icon>
              </div>
            </div>
            <p class="fw-medium text-sm text-primary-light mt-12 mb-0">
              <span class="text-success-main"><iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +$5,000</span> 
              Last 30 days expense
            </p>
          </div>
        </div><!-- card end -->
      </div>
    </div>

    
    <div class="card basic-data-table mt-20">
      <div class="card-header">
        <h5 class="card-title mb-0">All targets</h5>
      </div>
      <div class="card-body">
        <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
          <thead>
              <tr>
                  <th scope="col">
                      <div class="form-check style-check d-flex align-items-center">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">S.L</label>
                      </div>
                  </th>
                  <th scope="col">URL</th>
                  <th scope="col">Domain</th>
                  <th scope="col">IP Address</th>
                  <th scope="col">Server Type</th>
                  <th scope="col">CMS Type</th>
                  <th scope="col">Scan Date</th>
                  <th scope="col">HTTP Status</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
              </tr>
          </thead>
          <tbody>
              @foreach($targets as $index => $target)
              <tr>
                  <td>
                      <div class="form-check style-check d-flex align-items-center">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">{{ $index + 1 }}</label>
                      </div>
                  </td>
                  <td><a href="javascript:void(0)" class="text-primary-600">{{ $target->getFullUrlAttribute() }}</a></td>
                  <td>{{ $target->domain }}</td>
                  <td>{{ $target->ip_address }}</td>
                  <td>{{ $target->server_type }}</td>
                  <td>{{ $target->cms_type ?? 'N/A' }}</td> <!-- CMS Type can be optional -->
                  <td>{{ $target->last_scan_date->format('d M Y') }}</td>
                  <td>{{ $target->http_status ?? 'Unknown' }}</td>
                  <td>
                      @if($target->status == 'active')
                          <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                      @else
                          <span class="bg-danger-focus text-danger-main px-24 py-4 rounded-pill fw-medium text-sm">Inactive</span>
                      @endif
                  </td>
                  <td>
                      <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                          <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                      </a>
                      <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                          <iconify-icon icon="lucide:edit"></iconify-icon>
                      </a>
                      <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                          <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                      </a>
                  </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>


  </div>

    
@endsection
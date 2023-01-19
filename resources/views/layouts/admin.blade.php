<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{asset('public')}}/assets/images/favicon-32x32.png" type="image/png" />
  {{-- Remove advisably during production --}}
  <meta http-equiv='cache-control' content='no-cache'>
  <meta http-equiv='expires' content='0'>
  <meta http-equiv='pragma' content='no-cache'>
  <!--plugins-->
  <link href="{{asset('public')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <link href="{{asset('public')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="{{asset('public')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="{{asset('public')}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <link href="{{asset('public')}}/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="{{asset('public')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{asset('public')}}/assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="{{asset('public')}}/assets/css/style.css" rel="stylesheet" />

  <link href="{{asset('public')}}/assets/dist/css/select2.css" rel="stylesheet" />
  <link href="{{asset('public')}}/assets/css/icons.css" rel="stylesheet">
  <link href="{{asset('public')}}/assets/css/bootstrap-print.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> --}}
  

  

  <!-- loader-->
	<!-- <link href="{{asset('public')}}/assets/css/pace.min.css" rel="stylesheet" /> -->

  <!--Theme Styles-->
  <link href="{{asset('public')}}/assets/css/dark-theme.css" rel="stylesheet" />
  <link href="{{asset('public')}}/assets/css/light-theme.css" rel="stylesheet" />
  <link href="{{asset('public')}}/assets/css/semi-dark.css" rel="stylesheet" />
  <link href="{{asset('public')}}/assets/css/header-colors.css" rel="stylesheet" />

  <title>@yield('title')</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
      <header class="top-header d-print-none">        
        <nav class="navbar navbar-expand gap-3">
          <div class="mobile-toggle-icon fs-3">
              <i class="bi bi-list"></i>
            </div>
            <form class="searchbar">
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
                <input class="form-control" type="text" placeholder="Type here to search">
                <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i></div>
            </form>
            <div class="top-navbar-right ms-auto">
              <ul class="navbar-nav align-items-center">
                <li class="nav-item search-toggle-icon">
                  <a class="nav-link" href="#">
                    <div class="">
                      <i class="bi bi-search"></i>
                    </div>
                  </a>
              </li>
              <li class="nav-item dropdown dropdown-user-setting">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="user-setting d-flex align-items-center">
                    <img src="{{asset('public')}}/assets/images/avatars/avatar-1.png" class="user-img" alt="">
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                          <img src="{{asset('public')}}/assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="54" height="54">
                          <div class="ms-3">
                            <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                            <small class="mb-0 dropdown-user-designation text-secondary">HR Manager</small>
                          </div>
                       </div>
                     </a>
                   </li>
                   <li><hr class="dropdown-divider"></li>
                   <li>
                      <a class="dropdown-item" href="pages-user-profile.html">
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-person-fill"></i></div>
                           <div class="ms-3"><span>Profile</span></div>
                         </div>
                       </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-gear-fill"></i></div>
                           <div class="ms-3"><span>Setting</span></div>
                         </div>
                       </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="index2.html">
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-speedometer"></i></div>
                           <div class="ms-3"><span>Dashboard</span></div>
                         </div>
                       </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-piggy-bank-fill"></i></div>
                           <div class="ms-3"><span>Earnings</span></div>
                         </div>
                       </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-cloud-arrow-down-fill"></i></div>
                           <div class="ms-3"><span>Downloads</span></div>
                         </div>
                       </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                      <a class="dropdown-item" href="authentication-signup-with-header-footer.html">
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-lock-fill"></i></div>
                           <div class="ms-3"><span>Logout</span></div>
                         </div>
                       </a>
                    </li>
                </ul>
              </li>
              <li class="nav-item dropdown dropdown-large">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="projects">
                    <i class="bi bi-grid-3x3-gap-fill"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                   <div class="row row-cols-3 gx-2">
                      <div class="col">
                        <a href="ecommerce-orders.html">
                         <div class="apps p-2 radius-10 text-center">
                            <div class="apps-icon-box mb-1 text-white bg-gradient-purple">
                              <i class="bi bi-basket2-fill"></i>
                            </div>
                            <p class="mb-0 apps-name">Orders</p>
                         </div>
                        </a>
                      </div>
                      <div class="col">
                        <a href="javascript:;">
                        <div class="apps p-2 radius-10 text-center">
                           <div class="apps-icon-box mb-1 text-white bg-gradient-info">
                            <i class="bi bi-people-fill"></i>
                           </div>
                           <p class="mb-0 apps-name">Users</p>
                        </div>
                      </a>
                     </div>
                     <div class="col">
                      <a href="ecommerce-products-grid.html">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-gradient-success">
                          <i class="bi bi-trophy-fill"></i>
                         </div>
                         <p class="mb-0 apps-name">Products</p>
                      </div>
                      </a>
                    </div>
                    <div class="col">
                      <a href="component-media-object.html">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-gradient-danger">
                          <i class="bi bi-collection-play-fill"></i>
                         </div>
                         <p class="mb-0 apps-name">Media</p>
                      </div>
                      </a>
                    </div>
                    <div class="col">
                      <a href="pages-user-profile.html">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-gradient-warning">
                          <i class="bi bi-person-circle"></i>
                         </div>
                         <p class="mb-0 apps-name">Account</p>
                       </div>
                      </a>
                    </div>
                    <div class="col">
                      <a href="javascript:;">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-gradient-voilet">
                          <i class="bi bi-file-earmark-text-fill"></i>
                         </div>
                         <p class="mb-0 apps-name">Docs</p>
                      </div>
                      </a>
                    </div>
                    <div class="col">
                      <a href="ecommerce-orders-detail.html">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-gradient-branding">
                          <i class="bi bi-credit-card-fill"></i>
                         </div>
                         <p class="mb-0 apps-name">Payment</p>
                      </div>
                      </a>
                    </div>
                    <div class="col">
                      <a href="javascript:;">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-gradient-desert">
                          <i class="bi bi-calendar-check-fill"></i>
                         </div>
                         <p class="mb-0 apps-name">Events</p>
                      </div>
                    </a>
                    </div>
                    <div class="col">
                      <a href="javascript:;">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-gradient-amour">
                          <i class="bi bi-book-half"></i>
                         </div>
                         <p class="mb-0 apps-name">Story</p>
                        </div>
                      </a>
                    </div>
                   </div><!--end row-->
                </div>
              </li>
              <li class="nav-item dropdown dropdown-large">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="messages">
                    <span class="notify-badge">5</span>
                    <i class="bi bi-chat-right-fill"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end p-0">
                  <div class="p-2 border-bottom m-2">
                      <h5 class="h5 mb-0">Messages</h5>
                  </div>
                 <div class="header-message-list p-2">
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                          <img src="{{asset('public')}}/assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="50" height="50">
                          <div class="ms-3 flex-grow-1">
                            <h6 class="mb-0 dropdown-msg-user">Amelio Joly <span class="msg-time float-end text-secondary">1 m</span></h6>
                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The standard chunk of lorem...</small>
                          </div>
                       </div>
                     </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                         <img src="{{asset('public')}}/assets/images/avatars/avatar-2.png" alt="" class="rounded-circle" width="50" height="50">
                         <div class="ms-3 flex-grow-1">
                           <h6 class="mb-0 dropdown-msg-user">Althea Cabardo <span class="msg-time float-end text-secondary">7 m</span></h6>
                           <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Many desktop publishing</small>
                         </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                         <img src="{{asset('public')}}/assets/images/avatars/avatar-3.png" alt="" class="rounded-circle" width="50" height="50">
                         <div class="ms-3 flex-grow-1">
                           <h6 class="mb-0 dropdown-msg-user">Katherine Pechon <span class="msg-time float-end text-secondary">2 h</span></h6>
                           <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Making this the first true</small>
                         </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                         <img src="{{asset('public')}}/assets/images/avatars/avatar-4.png" alt="" class="rounded-circle" width="50" height="50">
                         <div class="ms-3 flex-grow-1">
                           <h6 class="mb-0 dropdown-msg-user">Peter Costanzo <span class="msg-time float-end text-secondary">3 h</span></h6>
                           <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">It was popularised in the 1960</small>
                         </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                         <img src="{{asset('public')}}/assets/images/avatars/avatar-5.png" alt="" class="rounded-circle" width="50" height="50">
                         <div class="ms-3 flex-grow-1">
                           <h6 class="mb-0 dropdown-msg-user">Thomas Wheeler <span class="msg-time float-end text-secondary">1 d</span></h6>
                           <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">If you are going to use a passage</small>
                         </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                         <img src="{{asset('public')}}/assets/images/avatars/avatar-6.png" alt="" class="rounded-circle" width="50" height="50">
                         <div class="ms-3 flex-grow-1">
                           <h6 class="mb-0 dropdown-msg-user">Johnny Seitz <span class="msg-time float-end text-secondary">2 w</span></h6>
                           <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">All the Lorem Ipsum generators</small>
                         </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                         <img src="{{asset('public')}}/assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="50" height="50">
                         <div class="ms-3 flex-grow-1">
                           <h6 class="mb-0 dropdown-msg-user">Amelio Joly <span class="msg-time float-end text-secondary">1 m</span></h6>
                           <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The standard chunk of lorem...</small>
                         </div>
                      </div>
                    </a>
                   <a class="dropdown-item" href="#">
                     <div class="d-flex align-items-center">
                        <img src="{{asset('public')}}/assets/images/avatars/avatar-2.png" alt="" class="rounded-circle" width="50" height="50">
                        <div class="ms-3 flex-grow-1">
                          <h6 class="mb-0 dropdown-msg-user">Althea Cabardo <span class="msg-time float-end text-secondary">7 m</span></h6>
                          <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Many desktop publishing</small>
                        </div>
                     </div>
                   </a>
                   <a class="dropdown-item" href="#">
                     <div class="d-flex align-items-center">
                        <img src="{{asset('public')}}/assets/images/avatars/avatar-3.png" alt="" class="rounded-circle" width="50" height="50">
                        <div class="ms-3 flex-grow-1">
                          <h6 class="mb-0 dropdown-msg-user">Katherine Pechon <span class="msg-time float-end text-secondary">2 h</span></h6>
                          <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Making this the first true</small>
                        </div>
                     </div>
                   </a>
                </div>
                <div class="p-2">
                  <div><hr class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <div class="text-center">View All Messages</div>
                    </a>
                </div>
               </div>
              </li>
              <li class="nav-item dropdown dropdown-large">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="notifications">
                    <span class="notify-badge">8</span>
                    <i class="bi bi-bell-fill"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end p-0">
                  <div class="p-2 border-bottom m-2">
                      <h5 class="h5 mb-0">Notifications</h5>
                  </div>
                  <div class="header-notifications-list p-2">
                      <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                           <div class="notification-box bg-light-primary text-primary"><i class="bi bi-basket2-fill"></i></div>
                           <div class="ms-3 flex-grow-1">
                             <h6 class="mb-0 dropdown-msg-user">New Orders <span class="msg-time float-end text-secondary">1 m</span></h6>
                             <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">You have recived new orders</small>
                           </div>
                        </div>
                      </a>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-purple text-purple"><i class="bi bi-people-fill"></i></div>
                          <div class="ms-3 flex-grow-1">
                            <h6 class="mb-0 dropdown-msg-user">New Customers <span class="msg-time float-end text-secondary">7 m</span></h6>
                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5 new user registered</small>
                          </div>
                       </div>
                     </a>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-success text-success"><i class="bi bi-file-earmark-bar-graph-fill"></i></div>
                          <div class="ms-3 flex-grow-1">
                            <h6 class="mb-0 dropdown-msg-user">24 PDF File <span class="msg-time float-end text-secondary">2 h</span></h6>
                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The pdf files generated</small>
                          </div>
                       </div>
                     </a>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-orange text-orange"><i class="bi bi-collection-play-fill"></i></div>
                          <div class="ms-3 flex-grow-1">
                            <h6 class="mb-0 dropdown-msg-user">Time Response  <span class="msg-time float-end text-secondary">3 h</span></h6>
                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5.1 min avarage time response</small>
                          </div>
                       </div>
                     </a>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-info text-info"><i class="bi bi-cursor-fill"></i></div>
                          <div class="ms-3 flex-grow-1">
                            <h6 class="mb-0 dropdown-msg-user">New Product Approved  <span class="msg-time float-end text-secondary">1 d</span></h6>
                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Your new product has approved</small>
                          </div>
                       </div>
                     </a>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-pink text-pink"><i class="bi bi-gift-fill"></i></div>
                          <div class="ms-3 flex-grow-1">
                            <h6 class="mb-0 dropdown-msg-user">New Comments <span class="msg-time float-end text-secondary">2 w</span></h6>
                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">New customer comments recived</small>
                          </div>
                       </div>
                     </a>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-warning text-warning"><i class="bi bi-droplet-fill"></i></div>
                          <div class="ms-3 flex-grow-1">
                            <h6 class="mb-0 dropdown-msg-user">New 24 authors<span class="msg-time float-end text-secondary">1 m</span></h6>
                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">24 new authors joined last week</small>
                          </div>
                       </div>
                     </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-primary text-primary"><i class="bi bi-mic-fill"></i></div>
                         <div class="ms-3 flex-grow-1">
                           <h6 class="mb-0 dropdown-msg-user">Your item is shipped <span class="msg-time float-end text-secondary">7 m</span></h6>
                           <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Successfully shipped your item</small>
                         </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-success text-success"><i class="bi bi-lightbulb-fill"></i></div>
                         <div class="ms-3 flex-grow-1">
                           <h6 class="mb-0 dropdown-msg-user">Defense Alerts <span class="msg-time float-end text-secondary">2 h</span></h6>
                           <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">45% less alerts last 4 weeks</small>
                         </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-info text-info"><i class="bi bi-bookmark-heart-fill"></i></div>
                         <div class="ms-3 flex-grow-1">
                           <h6 class="mb-0 dropdown-msg-user">4 New Sign Up <span class="msg-time float-end text-secondary">2 w</span></h6>
                           <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">New 4 user registartions</small>
                         </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-bronze text-bronze"><i class="bi bi-briefcase-fill"></i></div>
                         <div class="ms-3 flex-grow-1">
                           <h6 class="mb-0 dropdown-msg-user">All Documents Uploaded <span class="msg-time float-end text-secondary">1 mo</span></h6>
                           <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Sussessfully uploaded all files</small>
                         </div>
                      </div>
                    </a>
                 </div>
                 <div class="p-2">
                   <div><hr class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">
                       <div class="text-center">View All Notifications</div>
                     </a>
                 </div>
                </div>
              </li>
              </ul>
              </div>
        </nav>
      </header>
       <!--end top header-->

        <!--start sidebar -->
        <aside class="sidebar-wrapper d-print-none" data-simplebar="true">
          <div class="sidebar-header">
            <div>
              <img src="{{asset('public')}}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            </div>
            <div>
              <h4 class="logo-text">ERP</h4>
            </div>
            <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div>
          </div>
          <!--navigation-->
          <ul class="metismenu" id="menu">
            <li>
              <a href="{{url('admin')}}">
                <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Dashboard</div>
              </a>              
            </li>
            <li>
              <a href="{{url('client')}}">
                <div class="parent-icon"><i class="bi bi-person-check-fill"></i>
                </div>
                <div class="menu-title">Client</div>
              </a>              
            </li>
            <li>
              <a href="{{url('subcontractor')}}">
                <div class="parent-icon"><i class="bi bi-file-earmark-person-fill"></i>
                </div>
                <div class="menu-title">Subcontractor</div>
              </a>              
            </li>            
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-briefcase-fill"></i>
                </div>
                <div class="menu-title">Project </div>
              </a>
              <ul>
                <li> <a href="{{ url('bill') }}"><i class="bi bi-circle"></i>Bills</a>
                </li>
                <li> <a href="{{ url('project') }}"><i class="bi bi-circle"></i>Projects</a>
                </li>
                <li> <a href="{{ url('task') }}"><i class="bi bi-circle"></i>Tasks</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-receipt"></i>
                </div>
                <div class="menu-title">Account </div>
              </a>
              <ul>
                {{-- <li> <a href="javascript:;" class="has-arrow"><i class="bi bi-circle"></i>Banking</a>
                  <ul>
                    <li> <a href="#"><i class="bi bi-circle"></i>Account Details</a>
                    </li>
                    <li> <a href="#"><i class="bi bi-circle"></i>Transfer</a>
                    </li>
                  </ul>
                </li> --}}
                <li> <a href="javascript:;" class="has-arrow"><i class="bi bi-circle"></i>Income</a>
                  <ul>
                    <li> <a href="{{ 'invoice' }}"><i class="bi bi-circle"></i>Invoice</a>
                    </li>
                    <li> <a href="{{ 'revenue' }}"><i class="bi bi-circle"></i>Revenue</a>
                    </li>
                    {{-- <li> <a href="#"><i class="bi bi-circle"></i>Credit Note</a>
                    </li> --}}
                  </ul>
                </li>
                <li> <a href="javascript:;" class="has-arrow"><i class="bi bi-circle"></i>Expense</a>
                  <ul>
                    <li> <a href="#"><i class="bi bi-circle"></i>Bill</a>
                    </li>
                    <li> <a href="#"><i class="bi bi-circle"></i>Payment</a>
                    </li>
                    <li> <a href="#"><i class="bi bi-circle"></i>Debit Note</a>
                    </li>
                  </ul>
                </li>
                {{-- <li> <a href="javascript:;" class="has-arrow"><i class="bi bi-circle"></i>Double Entry</a>
                  <ul>
                    <li> <a href="#"><i class="bi bi-circle"></i>Chart of Accounts</a>
                    </li>
                    <li> <a href="#"><i class="bi bi-circle"></i>Journal Account</a>
                    </li>
                    <li> <a href="#"><i class="bi bi-circle"></i>Ledger Summary</a>
                    </li>
                    <li> <a href="#"><i class="bi bi-circle"></i>Balance Sheet</a>
                    </li>
                    <li> <a href="#"><i class="bi bi-circle"></i>Trial Balance</a>
                    </li>
                  </ul>
                </li> --}}
                <li> <a href="#"><i class="bi bi-circle"></i>Taxes</a>
                </li>
                <li> <a href="#"><i class="bi bi-circle"></i>Currency</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-ui-checks-grid"></i>
                </div>
                <div class="menu-title">HR </div>
              </a>
              <ul>                
                <li>
                  <a href="{{url('department')}}" ><i class="bi bi-circle"></i>Department</a>              
                </li>
                <li> <a href="{{url('position')}}" ><i class="bi bi-circle"></i>Position</a>
                </li>
                <li> <a href="{{url('employee')}}"><i class="bi bi-circle"></i>Employee</a>
                </li>
                <li> <a href="{{url('freelancer')}}"><i class="bi bi-circle"></i>Freelancer</a>
                </li>
                {{-- <li> <a href="javascript:;" class="has-arrow"><i class="bi bi-circle"></i>Payroll</a>
                  <ul>
                    <li> <a href="#"><i class="bi bi-circle"></i>Set Salary</a>
                    </li>
                    <li> <a href="#"><i class="bi bi-circle"></i>Pay Slip</a>
                    </li>
                  </ul>
                </li> --}}
                <li> <a href="javascript:;" class="has-arrow"><i class="bi bi-circle"></i>Training</a>
                  <ul>
                    <li> <a href="#"><i class="bi bi-circle"></i>Training List</a>
                    </li>
                    <li> <a href="#"><i class="bi bi-circle"></i>Trainer</a>
                    </li>
                  </ul>
                </li>
                <li> <a href="#"><i class="bi bi-circle"></i>Leave Management</a>
                </li>
                {{-- <li> <a href="#"><i class="bi bi-circle"></i>Attendance</a>
                </li> --}}
                <li> <a href="{{ url('handbook') }}"><i class="bi bi-circle"></i>Employee Handbook</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-car-front"></i>
                </div>
                <div class="menu-title">Vehicle</div>
              </a>
              <ul>
                <li> <a href="{{ url('vehicle') }}"><i class="bi bi-circle"></i>Vehicles</a>
                </li>
                <li> <a href="{{ url('vehiclelog') }}"><i class="bi bi-circle"></i>Vehicle Log</a>
                </li>
              </ul>
            </li>            
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-file-bar-graph"></i>
                </div>
                <div class="menu-title">Report</div>
              </a>
              <ul>
                <li> <a href="#"><i class="bi bi-circle"></i>Daily Report</a>
                </li>
                <li> <a href="#"><i class="bi bi-circle"></i>Weekly Report</a>
                </li>
                <li> <a href="#"><i class="bi bi-circle"></i>Monthly Report</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                <div class="parent-icon"><i class="bi bi-chat-dots"></i>
                </div>
                <div class="menu-title">Message</div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="parent-icon"><i class="bi bi-person-lines-fill"></i>
                </div>
                <div class="menu-title">User Profile</div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="parent-icon"><i class="bi bi-box-arrow-in-left"></i>
                </div>
                <div class="menu-title">Logout</div>
              </a>
            </li>
          <!--end navigation-->
       </aside>
       <!--end sidebar -->

       <!--start content-->
       @yield('content')
       <!--end page main-->

       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

       <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top d-print-none"><i class='bx bxs-up-arrow-alt'></i></a>
       <!--End Back To Top Button-->

       <!--start switcher-->
       <!-- <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
          <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <h6 class="mb-0">Theme Variation</h6>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1" checked>
              <label class="form-check-label" for="LightTheme">Light</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
              <label class="form-check-label" for="DarkTheme">Dark</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
              <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
            </div>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3">
              <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
            </div>
            <hr/>
            <h6 class="mb-0">Header Colors</h6>
            <hr/>
            <div class="header-colors-indigators">
              <div class="row row-cols-auto g-3">
                <div class="col">
                  <div class="indigator headercolor1" id="headercolor1"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor2" id="headercolor2"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor3" id="headercolor3"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor4" id="headercolor4"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor5" id="headercolor5"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor6" id="headercolor6"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor7" id="headercolor7"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor8" id="headercolor8"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div> -->
       <!--end switcher-->

  </div>
  <!--end wrapper-->

  <!-- Bootstrap bundle JS -->
  <script src="{{asset('public')}}/assets/js/bootstrap.bundle.min.js"></script>

  <!--jQuery plugin-->  
  <script src="{{asset('public')}}/assets/js/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <!--PopperJS plugins-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <!--plugins-->
  <script src="{{asset('public')}}/assets/js/BsMultiSelect.min.js"></script>
  <script src="{{asset('public')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="{{asset('public')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="{{asset('public')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="{{asset('public')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="{{asset('public')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="{{asset('public')}}/assets/js/pace.min.js"></script>
  <script src="{{asset('public')}}/assets/plugins/chartjs/js/Chart.min.js"></script>
  <script src="{{asset('public')}}/assets/plugins/chartjs/js/Chart.extension.js"></script>
  <script src="{{asset('public')}}/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
  <script src="{{asset('public')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
  <script src="{{asset('public')}}/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
  <script src="{{asset('public')}}/assets/js/table-datatable.js"></script>
  
  <!--app-->
  <script src="{{asset('public')}}/assets/js/bill1.js"></script>

  {{-- select-input-search --}}
  <script>
    $(document).ready(function() {
        $('.select-search').select2();
    });
  </script>
  <script>
  // Multi-select
    // $(function(){

    // $("select[multiple='multiple']").bsMultiSelect({placeholder: 'Choose...'});

    // });
  </script>


  <script>
    $(document).ready(function(){      
    //Show | Hide Percentage Progress -> Project
    $('.showHide').hide();
    $('select[name=status]').on('change', function () {
    // hide optional element(s)
    $('.showHide').hide();
        
    $("select[name=status] option:selected").each(function () {
        var value = $(this).val();
        if(value == "InProgress" || value == "OnHold" || value == "Completed") {
            $('#progress').show();
            $('.showHide').show();
          }
      });
    });

      
    //Change local governments

    $('#state_of_Origin').on('change', function () {
          var idState = this.value;
          $("#local_Government").html('');
          $.ajax({
              url: "{{url('api/fetch-locals')}}",//
              type: "POST",
              data: {
                  state_id: idState,
                  _token: '{{csrf_token()}}'
              },
              dataType: 'json',
              success: function (res) {
                  $('#local_Government').html('<option value="">-- Select Local Government --</option>');
                  $.each(res.locals, function (key, value) {
                      $("#local_Government").append('<option value="' + value.id + '">' + value.name + '</option>');
                  });
              }
          });
      });
    });
  </script>

  {{-- <script>
    const date = new Date();

    let day = date.getDate();
    let month = date.getMonth() + 1;
    let year = date.getFullYear();

    // Date's format
    let currentDate = `${day}-${month}-${year}`;
    // Date assign
    document.getElementById("date_created").value = currentDate;
  </script> --}}

  <script src="{{asset('public')}}/assets/js/app-chat-box.js"></script>  
  <script src="{{asset('public')}}/assets/js/app.js"></script>
  <script src="{{asset('public')}}/assets/js/index2.js"></script>
  <script>
    new PerfectScrollbar(".best-product")
 </script>


</body>

</html>
 <!-- start navbar -->
 <nav class=" w-100 shadow sticky-top bg-white">
     <div class="d-flex justify-content-between p-3 align-items-center container ">
         <div>
             <a href="">
                 <img src="{{ asset('images/logo.png') }}" alt="Company Logo" height="48" width="100px">
             </a>
         </div>
         <div>
             <div class="d-flex position-relative align-items-center">
                 <!-- Notifications Dropdown Menu -->
                 @auth
                     <ul class="navbar-nav ms-4 ms-md-0 ">
                         <li class="nav-item dropdown-center ms-5">
                             <a class="nav-link myicon" href="#" id="navbarDropdown" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 <i class="fa-solid fa-bell position-relative">
                                     <span
                                         class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                                         <span class="visually-hidden">New alerts</span>
                                 </i>
                             </a>
                             <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 @foreach (range(4, 1) as $count)
                                     <li><a class="dropdown-item" href="#">
                                             <div class=" border-0  w-100 m-0">
                                                 <div class="d-flex  align-items-center ">
                                                     <div class="d-none d-sm-block ms-4">
                                                         <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/05{{ $count }}.webp"
                                                             class="rounded-pill"
                                                             style="width: 50px; height: 50px; object-fit:cover "
                                                             alt="Avatar" />
                                                     </div>
                                                     <div class="w-100">
                                                         <div
                                                             class="d-flex  align-items-center justify-content-start w-100">
                                                             <h6 class="contact-txt-color-2 fw-bold m-0 ms-2">نجيب باشا</h6>
                                                             <p class="m-0">علق لك علي منتجك الجديد</p>
                                                         </div>
                                                         <h6 class="text-end m-0 mt-2 text-black-50 ">منذ <span>3
                                                                 دقائق</span></h6>
                                                     </div>
                                                 </div>
                                             </div>
                                         </a>
                                     </li>
                                     <hr class="dropdown-divider p-0">
                                 @endforeach
                             </ul>
                         </li>
                     </ul>
                 @endauth
                 @guest
                     <div class="d-none d-md-flex align-items-center border-0 mx-5">
                         <a href="{{ route('login') }}" class="login-button custom-link">تسجيل الدخول </i></a>
                     </div>
                 @endguest
                 <div id="subMenu">
                     <span class="hamLine"></span>
                     <span class="hamLine"></span>
                     <span class="hamLine"></span>
                 </div>
                 <div id="fullPageMenu" class="visually-hidden">
                     <div class="anton d-flex align-items-start position-fixed  start-0 blurOverlay">
                         <div class="container">
                             <div class="my-4"><a href="{{ route('favourite.index') }}" class="custom-link"> <i><i
                                             class="fa-solid fa-heart ms-2 fa-xl"></i></i><span>المفضلة</span></a>
                             </div>
                             <div class="my-4"><a href="{{ route('blogs.index') }}" class="custom-link"><i
                                         class="fa-solid fa-pen-to-square ms-2 fa-xl"></i>المدونة </a></div>
                             <div class="my-4"><a href="{{ route('bankAcount.index') }}" class="custom-link"> <i
                                         class="fa-solid fa-money-bill-trend-up ms-2 fa-xl "></i>الحساب البنكى</a>
                             </div>
                             <div class="my-4"><a href="{{ route('terms.index') }}" class="custom-link"><i
                                         class="fa-solid fa-file-lines ms-2 fa-xl"></i>
                                     الشروط والاحكام</a></div>
                             <div class="my-4"><a href="{{ route('aboutus.index') }}" class="custom-link"><i
                                         class="fa-solid fa-users ms-2 fa-xl"></i>من نحن
                                 </a></div>
                             @auth
                                 <div class="my-4">
                                     <form action="{{ route('logout') }}" method="post">
                                         @csrf
                                         <button type="submit" class="custom-link" style="border:none;">
                                             <i class="fa-solid fa-arrow-right-from-bracket ms-2 fa-xl"></i>
                                             تسجيل الخروج</button>
                                 </div>
                                 </form>
                             </div>
                         @endauth
                         @guest
                             <div class="my-4"><a href="{{ route('login') }}" class="custom-link">
                                     <i class="fa-solid fa-arrow-right-from-bracket ms-2 fa-xl"></i>
                                     تسجيل الدخول</a></div>
                         @endguest
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </nav>
 <!-- end navbar -->


 <script>
     window.onload = function(e) {
         let subMenu = document.getElementById('subMenu')
         let fullPageMenu = document.getElementById('fullPageMenu')
         subMenu.addEventListener('click', function() {
             if (subMenu.className === 'menuClicked') {
                 subMenu.className = ""
                 setTimeout(function() {
                     fullPageMenu.className = "visually-hidden"
                 }, 200)
             } else {
                 subMenu.className = 'menuClicked'
                 fullPageMenu.className = "slideRight"
             }
         })
     }
 </script>

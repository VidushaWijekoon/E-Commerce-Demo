 <nav id="sidebar" class="sidebar">
     <div class="sidebar-content js-simplebar">
         <a class="sidebar-brand" href="#">
             <span class="align-middle d-flex justify-content-center mt-2">
                 <img src="{{ asset('img/TD-LOGO-01.svg') }}" alt="logo" class="w-75">
             </span>
         </a>

         <ul class="sidebar-nav">
             <li class="sidebar-header">Main</li>

             <li class="sidebar-item active">
                 <a class="sidebar-link" href="#">
                     <i class="align-middle" data-feather="sliders"></i>
                     <span class="align-middle">Dashboard</span>
                 </a>
             </li>

             <li class="sidebar-item">
                 <a class="sidebar-link" href="{{ route('admin.dashboard.category') }}">
                     <i class="align-middle" data-feather="tag"></i>
                     <span class="align-middle">Category</span>
                 </a>
             </li>

             <li class="sidebar-item">
                 <a class="sidebar-link" href="#">
                     <i class="align-middle" data-feather="copy"></i>
                     <span class="align-middle">Brand & Color</span>
                 </a>
             </li>

             <li class="sidebar-item">
                 <a class="sidebar-link" href="#">
                     <i class="align-middle" data-feather="layers"></i>
                     <span class="align-middle">Product</span>
                 </a>
             </li>

             <li class="sidebar-header">Related</li>

             <li class="sidebar-item">
                 <a class="sidebar-link" href="#">
                     <i class="align-middle" data-feather="grid"></i>
                     <span class="align-middle">Sliders</span>
                 </a>
             </li>

             <li class="sidebar-item">
                 <a href="#event" data-toggle="collapse" class="sidebar-link collapsed">
                     <i class="align-middle" data-feather="command"></i>
                     <span class="align-middle">Events</span>
                 </a>
                 <ul id="event" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                     <li class="sidebar-item">
                         <a class="sidebar-link" href="#">Promotions</a>
                     </li>
                     <li class="sidebar-item">
                         <a class="sidebar-link" href="#">Offers</a>
                     </li>
                     <li class="sidebar-item">
                         <a class="sidebar-link" href="#">Coupens</a>
                     </li>
                 </ul>
             </li>

             <li class="sidebar-header">Accounts</li>


             <li class="sidebar-item">
                 <a class="sidebar-link" href="#">
                     <i class="align-middle" data-feather="lock"></i>
                     <span class="align-middle">Approve</span>
                 </a>
             </li>

             <li class="sidebar-item">
                 <a href="#sales" data-toggle="collapse" class="sidebar-link collapsed">
                     <i class="align-middle" data-feather="briefcase"></i>
                     <span class="align-middle">Sales</span>
                 </a>
                 <ul id="sales" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                     <li class="sidebar-item">
                         <a class="sidebar-link" href="#">Sales</a>
                     </li>
                     <li class="sidebar-item">
                         <a class="sidebar-link" href="#">Orders</a>
                     </li>
                 </ul>
             </li>
             <li class="sidebar-header">Other</li>

             <li class="sidebar-item">
                 <a class="sidebar-link" href="#">
                     <i class="align-middle" data-feather="user"></i>
                     <span class="align-middle">Profile</span>
                 </a>
             </li>


             <li class="sidebar-item">
                 <a class="sidebar-link" href="#">
                     <i class="align-middle" data-feather="settings"></i>
                     <span class="align-middle">Settings</span>
                 </a>
             </li>

             <li class="sidebar-item">
                 <a class="sidebar-link" href="{{ route('frontend.index') }}">
                     <i class="align-middle" data-feather="home"></i>
                     <span class="align-middle">E-Commerce Site</span>
                 </a>
             </li>

         </ul>
     </div>
 </nav>

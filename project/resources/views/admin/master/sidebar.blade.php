   <!-- ======= Sidebar ======= -->
   <aside id="sidebar" class="sidebar">

       <ul class="sidebar-nav" id="sidebar-nav">

           <li class="nav-item">
               <a class="nav-link " href="{{url('/dashboard')}}">
                   <i class="bi bi-grid"></i>
                   <span>Dashboard</span>
               </a>
           </li><!-- End Dashboard Nav -->
           @if(Auth::user()->role==2)
           <li class="nav-item">
               <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                   <i class="bi bi-menu-button-wide"></i><span>Lawyer</span><i class="bi bi-chevron-down ms-auto"></i>
               </a>
               <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                   <li>
                       <a href="{{url('admin/lawyers/create')}}">
                           <i class="bi bi-circle"></i><span>Add</span>
                       </a>
                   </li>
                   <li>
                       <a href="{{url('admin/lawyers/index')}}">
                           <i class="bi bi-circle"></i><span>View</span>
                       </a>
                   </li>
               </ul>
           </li><!-- Lawyers Nav -->

           @elseif(Auth::user()->role==1)
           <li class="nav-item">
               <a class="nav-link collapsed" href="{{ url('admin/lawyers/detail')}}/{{Auth::user()->id}}">
                   <i class="bi bi-menu-button-wide"></i><span>Profile</span>
               </a>
           </li>
           @endif
           <li class="nav-item">
               <a class="nav-link collapsed" data-bs-target="#components-na1v" data-bs-toggle="collapse" href="#">
                   <i class="bi bi-menu-button-wide"></i><span>Cases</span><i class="bi bi-chevron-down ms-auto"></i>
               </a>
               <ul id="components-na1v" class="nav-content collapse " data-bs-parent="#sidebar-nav">
           @if(Auth::user()->role==2)

                   <li>
                       <a href="{{url('admin/cases/create')}}">
                           <i class="bi bi-circle"></i><span>Add Case</span>
                       </a>
                   </li>
                   <li>
                       <a href="{{url('admin/cases/index')}}">
                           <i class="bi bi-circle"></i><span>View</span>
                       </a>
                   </li>
                   @elseif(Auth::user()->role==1)
                   <li>
                       <a href="{{url('admin/cases/index')}}">
                           <i class="bi bi-circle"></i><span>View</span>
                       </a>
                   </li>
                   @endif
                   <!-- <li>
                       <a href="{{url('admin/detail/create')}}">
                           <i class="bi bi-circle"></i><span>Update Case</span>
                       </a>
                   </li> -->
               </ul>
           </li><!-- Case Nav -->

       </ul>

   </aside><!-- End Sidebar-->

   <main id="main" class="main">
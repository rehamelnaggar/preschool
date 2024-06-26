<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard.index') ? 'active' : '' }}" href="{{ route('dashboard.index') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class=" bi bi-circle"></i><span>Alerts</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="bi bi-circle"></i><span>Accordion</span>
            </a>
          </li>
          <li>
            <a href="components-badges.html">
              <i class="bi bi-circle"></i><span>Badges</span>
            </a>
          </li>
          <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Breadcrumbs</span>
            </a>
          </li>
          <li>
            <a href="components-buttons.html">
              <i class="bi bi-circle"></i><span>Buttons</span>
            </a>
          </li>
          <li>
            <a href="components-cards.html">
              <i class="bi bi-circle"></i><span>Cards</span>
            </a>
          </li>
          <li>
            <a href="components-carousel.html">
              <i class="bi bi-circle"></i><span>Carousel</span>
            </a>
          </li>
          <li>
            <a href="components-list-group.html">
              <i class="bi bi-circle"></i><span>List group</span>
            </a>
          </li>
          <li>
            <a href="components-modal.html">
              <i class="bi bi-circle"></i><span>Modal</span>
            </a>
          </li>
          <li>
            <a href="components-tabs.html">
              <i class="bi bi-circle"></i><span>Tabs</span>
            </a>
          </li>
          <li>
            <a href="components-pagination.html">
              <i class="bi bi-circle"></i><span>Pagination</span>
            </a>
          </li>
          <li>
            <a href="components-progress.html">
              <i class="bi bi-circle"></i><span>Progress</span>
            </a>
          </li>
          <li>
            <a href="components-spinners.html">
              <i class="bi bi-circle"></i><span>Spinners</span>
            </a>
          </li>
          <li>
            <a href="components-tooltips.html">
              <i class="bi bi-circle"></i><span>Tooltips</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed {{ request()->is('dashboard/addTeacher') || request()->is('dashboard/addChild') || request()->is('dashboard/addKiderClass') || request()->is('dashboard/addChildToClass') ? 'active' : '' }}" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse {{ request()->is('dashboard/addTeacher') || request()->is('dashboard/addChild') || request()->is('dashboard/addKiderClass')|| request()->is('dashboard/addChildToClass') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
        
        <li>
            <a href="{{ route('dashboard.addTeacher') }}" class="{{ request()->is('dashboard/addTeacher') ? 'active' : '' }}" >
              <i class="bi bi-circle "></i><span>Form add teacher</span>
            </a>
          </li>



          <li>
            <a href="{{route('dashboard.addChild')}}" class="{{ request()->is('dashboard/addChild') ? 'active' : '' }}" >
              <i class="bi bi-circle "></i><span>Form add child</span>
            </a>
          </li>

          <li>
            <a href="{{route('dashboard.addKiderClass')}}" class="{{ request()->is('dashboard/addKiderClass') ? 'active' : '' }}" >
              <i class="bi bi-circle "></i><span>Form add Kider Class</span>
            </a>
          </li>


          <li>
            <a href="{{route('dashboard.addChildToClass')}}" class="{{ request()->is('dashboard/addChildToClass') ? 'active' : '' }}" >
              <i class="bi bi-circle "></i><span>Form add Child to Class</span>
            </a>
          </li>

        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
      <a class="nav-link collapsed {{ request()->is('dashboard/teachers') || request()->is('dashboard/trashTeacher') || request()->is('dashboard/childern') || request()->is('dashboard/KiderClasses') || request()->is('dashboard/childToClasses') || request()->is('dashboard/contact') ? 'active' : '' }}" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse {{ request()->is('dashboard/teachers') || request()->is('dashboard/trashTeacher') || request()->is('dashboard/childern') || request()->is('dashboard/KiderClasses') || request()->is('dashboard/childToClasses') || request()->is('dashboard/contact') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
         
        <li>
        <a href="{{ route('dashboard.teachers') }}" class="{{ request()->is('dashboard/teachers') ? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>teacheres</span>
            </a>
          </li>

          <li>
          <a href="{{ route('dashboard.trashTeacher') }}" class="{{ request()->is('dashboard/trashTeacher') ? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>restore teacher</span>
            </a>
          </li>


          <li>
          <a href="{{ route('dashboard.childern') }}" class="{{ request()->is('dashboard/childern') ? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Childern</span>
            </a>
          </li>

          <li>
          <a href="{{ route('dashboard.KiderClasses') }}" class="{{ request()->is('dashboard.KiderClasses') ? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Kider Classes</span>
            </a>
          </li>

          <li>
          <a href="{{ route('dashboard.childToClasses') }}" class="{{ request()->is('dashboard.childToClasses') ? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>child to Classes</span>
            </a>
          </li>
          

          <li>
          <a href="{{ route('dashboard.contact') }}" class="{{ request()->is('dashboard.contact') ? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>contact</span>
            </a>
          </li>


        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('dashboard.contact')}}">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('register')}}">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('login')}}">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
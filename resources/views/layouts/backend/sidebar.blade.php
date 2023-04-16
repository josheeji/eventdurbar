<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- End Dashboard Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ URL::to('/home') }}">
                <i class="bi bi-view-stacked"></i>
                <span>View Site</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Pages</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/admin/banners">
                        <i class="bi bi-circle"></i><span>Banner</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/event-types">
                        <i class="bi bi-circle"></i><span>Events Types</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/events">
                        <i class="bi bi-circle"></i><span>Events</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/event-templates">
                        <i class="bi bi-circle"></i><span>Certificate Template</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/participant-types">
                        <i class="bi bi-circle"></i><span> Participant Type</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/participants">
                        <i class="bi bi-circle"></i><span> Participants </span>
                    </a>
                </li>



            </ul>
        <li class="nav-item">
            <form action="/admin/logout" method="post">
                @csrf
                <button class="nav-link collapsed" type="submit">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </button>
            </form>

        </li>
        </li>



    </ul>


</aside><!-- End Sidebar-->

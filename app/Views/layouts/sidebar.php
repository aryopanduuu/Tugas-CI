<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <!-- Menu Utama -->
                <div class="nav-item menu-open">
                    <a class="nav-link active">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-list">
                            <path d="M9 6l11 0"></path>
                            <path d="M9 12l11 0"></path>
                            <path d="M9 18l11 0"></path>
                            <path d="M5 6l0 .01"></path>
                            <path d="M5 12l0 .01"></path>
                            <path d="M5 18l0 .01"></path>
                        </svg>
                        <p>
                            Menu Utama
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>
                    <div class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('/'); ?>" class="nav-link active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-home">
                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                                </svg>
                                <p>Beranda</p>
                            </a>
                        </li>
                    </div>
                </div>
                <!-- Pertemuan -->
                <li class="nav-item menu-open">
                    <a class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-calendar-event">
                            <path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
                            <path d="M16 3l0 4"></path>
                            <path d="M8 3l0 4"></path>
                            <path d="M4 11l16 0"></path>
                            <path d="M8 15h2v2h-2z"></path>
                        </svg>
                        <p>
                            Pertemuan
                            <i class="right fas fa-angle-down   "></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-calendar">
                                    <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
                                    <path d="M16 3v4"></path>
                                    <path d="M8 3v4"></path>
                                    <path d="M4 11h16"></path>
                                    <path d="M11 15h1"></path>
                                    <path d="M12 15v3"></path>
                                </svg>
                                <p>Jadwal</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-arrow-move-right">
                                    <path d="M11 12h10"></path>
                                    <path d="M18 9l3 3l-3 3"></path>
                                    <path d="M7 12a2 2 0 1 1 -4 0a2 2 0 0 1 4 0z"></path>
                                </svg>
                                <p>Pergantian</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Evaluasi Dosen -->
                <li class="nav-item">
                    <a class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-adjustments-horizontal">
                            <path d="M14 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                            <path d="M4 6l8 0"></path>
                            <path d="M16 6l4 0"></path>
                            <path d="M8 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                            <path d="M4 12l2 0"></path>
                            <path d="M10 12l10 0"></path>
                            <path d="M17 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                            <path d="M4 18l11 0"></path>
                            <path d="M19 18l1 0"></path>
                        </svg>
                        <p>Evaluasi Dosen</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
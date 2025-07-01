<!-- Floating Burger Button (Always visible on mobile, fixed) -->
<button class="btn btn-primary shadow burger-btn d-lg-none" id="btnOpenSidebar" aria-label="Menu">
    <i class="bi bi-list fs-3"></i>
</button>

<div class="wrapper d-flex">
    <!-- Sidebar -->
    <nav id="sidebar" class="sidebar bg-white shadow-lg">
        <div class="sidebar-header d-flex align-items-center p-3 border-bottom">
            <span class="fs-5 fw-bold text-primary"><i class="bi bi-sliders2-vertical me-2"></i> KendaliKita</span>
            <button class="btn btn-sm ms-auto d-lg-none" id="btnCloseSidebar" aria-label="Tutup Sidebar"><i class="bi bi-x-lg"></i></button>
        </div>
        <ul class="nav flex-column pt-3">
            <li class="nav-item mb-2">
                <a href="<?= site_url('pompa/dashboard') ?>" class="nav-link <?= uri_string() == 'pompa/dashboard' ? 'active' : '' ?>">
                    <i class="bi bi-house-door me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= site_url('pompa/list') ?>" class="nav-link <?= uri_string() == 'pompa/list' ? 'active' : '' ?>">
                    <i class="bi bi-droplet-half me-2"></i> List Pompa
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= site_url('pompa/jadwal') ?>" class="nav-link <?= uri_string() == 'pompa/jadwal' ? 'active' : '' ?>">
                    <i class="bi bi-clock me-2"></i> Jadwal
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= site_url('pompa/log') ?>" class="nav-link <?= uri_string() == 'pompa/log' ? 'active' : '' ?>">
                    <i class="bi bi-list me-2"></i> Log
                </a>
            </li>
        </ul>
    </nav>
    <!-- Konten utama -->
    <div class="main-content flex-grow-1">
        <div class="container-fluid py-2 px-2 px-lg-4">

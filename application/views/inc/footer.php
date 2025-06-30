</div>
<nav class="navbar nav-bottom bg-white border-top d-flex justify-content-around">
    <a href="<?= site_url('pompa/dashboard') ?>" class="nav-link text-center py-2 <?= uri_string() == 'pompa/dashboard' ? 'fw-bold text-primary' : '' ?>">
        <i class="bi bi-house-door fs-4"></i><br>Dashboard
    </a>
    <a href="<?= site_url('pompa') ?>" class="nav-link text-center py-2 <?= (uri_string() == 'pompa' || uri_string() == 'pompa/list') ? 'fw-bold text-primary' : '' ?>">
        <i class="bi bi-droplet-half fs-4"></i><br>List
    </a>
    <a href="<?= site_url('pompa/jadwal') ?>" class="nav-link text-center py-2 <?= uri_string() == 'pompa/jadwal' ? 'fw-bold text-primary' : '' ?>">
        <i class="bi bi-clock fs-4"></i><br>Jadwal
    </a>
    <a href="<?= site_url('pompa/log') ?>" class="nav-link text-center py-2 <?= uri_string() == 'pompa/log' ? 'fw-bold text-primary' : '' ?>">
        <i class="bi bi-list fs-4"></i><br>Log
    </a>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php $this->load->view('inc/header'); ?>
<?php $this->load->view('inc/toastr'); ?>

<h4 class="fw-bold mb-4 mt-2">Manajemen Pompa Air</h4>
<div class="mb-4 card card-body glass rounded-4 border-0 shadow-sm">
    <form action="<?= site_url('pompa/tambah') ?>" method="post" class="d-flex flex-column flex-md-row gap-2 mb-2">
        <input type="text" name="nama_pompa" class="form-control rounded-3 w-100" placeholder="Nama Pompa" required>
        <input type="text" name="kode_pompa" class="form-control rounded-3 w-100" placeholder="Kode Pompa" required>
        <button type="submit" class="btn btn-gradient w-100 w-md-auto" style="min-width:120px;"><i class="bi bi-plus"></i> Tambah</button>
    </form>
</div>
<div class="list-group">
    <?php if (empty($pompa_list)): ?>
        <div class="list-group-item text-center text-muted glass rounded-4">
            Belum ada pompa yang terdaftar.
        </div>
    <?php endif; ?>
    <?php foreach($pompa_list as $pompa): ?>
    <div class="list-group-item d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center glass mb-2 rounded-4 border-0 shadow-sm">
        <div class="mb-2 mb-md-0">
            <div class="fw-bold"><?= $pompa['nama_pompa'] ?></div>
            <small class="text-muted">Kode: <?= $pompa['kode_pompa'] ?></small>
        </div>
        <div>
            <a href="<?= site_url('pompa/hapus/'.$pompa['id_pompa']) ?>"
                class="btn btn-outline-danger btn-sm rounded-4 btn-hapus-modal"
                data-href="<?= site_url('pompa/hapus/'.$pompa['id_pompa']) ?>">
                <i class="bi bi-trash"></i>
            </a>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php $this->load->view('inc/footer'); ?>

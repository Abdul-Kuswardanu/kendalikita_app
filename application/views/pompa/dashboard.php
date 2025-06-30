<?php $this->load->view('inc/header'); ?>
<?php $this->load->view('inc/toastr'); ?>

<h4 class="fw-bold mb-4 mt-2">Dashboard Pompa Air</h4>
<?php if (empty($pompa_list)): ?>
    <div class="alert alert-warning text-center glass rounded-4 mt-4">
        <i class="bi bi-exclamation-triangle-fill"></i> Belum ada pompa air terdaftar.
    </div>
<?php endif; ?>
<div class="row g-2">
    <?php foreach($pompa_list as $pompa): ?>
    <div class="col-12">
        <div class="card card-status glass p-2 mb-2">
            <div class="card-body d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-2">
                <div>
                    <div class="fw-bold fs-5 mb-1"><?= $pompa['nama_pompa'] ?></div>
                    <small class="text-muted">Kode: <?= $pompa['kode_pompa'] ?></small>
                </div>
                <div>
                    <span class="badge badge-status <?= $pompa['status'] == 'ON' ? 'bg-success' : 'bg-secondary' ?>"><?= $pompa['status'] ?></span>
                </div>
                <div>
                    <?php if($pompa['status']=='ON'): ?>
                        <a href="<?= site_url('pompa/kontrol/'.$pompa['id_pompa'].'/OFF') ?>" class="btn btn-danger btn-lg w-100 w-md-auto mb-1 mb-md-0"><i class="bi bi-power"></i> Matikan</a>
                    <?php else: ?>
                        <a href="<?= site_url('pompa/kontrol/'.$pompa['id_pompa'].'/ON') ?>" class="btn btn-gradient btn-lg w-100 w-md-auto mb-1 mb-md-0"><i class="bi bi-lightning-charge"></i> Nyalakan</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php $this->load->view('inc/footer'); ?>

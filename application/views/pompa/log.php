<?php $this->load->view('inc/header'); ?>
<?php $this->load->view('inc/toastr'); ?>

<h4 class="fw-bold mb-4 mt-2">Log Aktivitas Pompa</h4>
<div class="table-responsive">
    <table class="table table-sm table-hover align-middle glass rounded-4">
        <thead class="table-light">
            <tr>
                <th>Pompa</th>
                <th>Aksi</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($log_list)): ?>
            <tr>
                <td colspan="3" class="text-center text-muted">Belum ada log aktivitas.</td>
            </tr>
            <?php endif; ?>
            <?php foreach($log_list as $log): ?>
            <tr>
                <td><?= $log['nama_pompa']; ?></td>
                <td>
                    <span class="badge <?= $log['aksi']=='ON'?'bg-success':'bg-secondary' ?>"><?= $log['aksi']; ?></span>
                </td>
                <td><?= $log['waktu']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="log-list-mobile">
        <?php if (empty($log_list)): ?>
            <div class="text-center my-4">
            <img src="https://cdn-icons-png.flaticon.com/512/4076/4076500.png" width="82" class="mb-2" alt="">
            <div class="text-muted small mb-2">Belum ada log yang terdaftar.<br>Yuk tambah log baru!</div>
            </div>
        <?php endif; ?>
        <?php foreach($log_list as $log): ?>
            <div class="glass mb-3 p-3 d-flex align-items-center justify-content-between" style="border-left:6px solid <?= $log['status']=='aktif'?'#34d399':'#a1a1aa' ?>">
            <div>
                <div class="fw-bold"><?= $log['nama_pompa']; ?></div>
                <div class="small">Hari: <b><?= $log['hari']; ?></b> • <?= $log['jam_mulai']; ?>–<?= $log['jam_selesai']; ?></div>
                <span class="badge <?= $log['status']=='aktif'?'bg-success':'bg-secondary' ?>"><?= ucfirst($log['status']); ?></span>
            </div>
            <a href="<?= site_url('pompa/hapus_log/'.$log['id_log']); ?>"
                class="btn btn-outline-danger btn-sm rounded-4 btn-hapus-modal"
                data-href="<?= site_url('pompa/hapus_log/'.$log['id_log']); ?>"><i class="bi bi-trash"></i></a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php $this->load->view('inc/footer'); ?>

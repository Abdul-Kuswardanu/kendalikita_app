<?php $this->load->view('inc/header'); ?>
<?php $this->load->view('inc/toastr'); ?>

<h4 class="fw-bold mb-4 mt-2">Log Aktivitas Pompa</h4>

<!-- table dekstop -->
<div class="table-responsive mb-3">
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
                <td><?= $log['nama_pompa'] ?></td>
                <td>
                    <span class="badge <?= $log['aksi']=='ON'?'bg-success':'bg-secondary' ?>"><?= $log['aksi'] ?></span>
                </td>
                <td><?= $log['waktu'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- card list mobile -->
 <div class="log-list-mobile">
    <?php if(empty($log_list)): ?>
        <div class="text-center my-4">
            <img src="https://cdn-icons-png.flaticon.com/512/2913/2913466.png" width="70" class="mb-2" alt="">
            <div class="text-muted small mb-2">Saat ini belum ada Riwayat</div>
        </div>
        <?php endif; ?>
        <?php foreach($log_list as $log): ?>
        <div class="glass mb-3 p-3 d-flex justify-content-between align-items-center rounded-4 border-0 shadow-sm">
            <div>
            <div class="fw-bold"><?= $log['nama_pompa'] ?></div>
            <div class="small text-muted"><span class="badge <?= $log['aksi']=='ON'?'bg-success':'bg-secondary' ?>"><?= $log['aksi'] ?></span></div>
            <div class="fw-bold"><?= $log['waktu'] ?></div>
        </div>
    </div>
    <?php endforeach; ?>
 </div>


<?php $this->load->view('inc/footer'); ?>

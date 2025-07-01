<?php $this->load->view('inc/header'); ?>
<?php $this->load->view('inc/sidebar'); ?>
<h4 class="fw-bold mb-4 mt-2">Log Aktivitas Pompa</h4>

<?php
$log_list = [
    ['nama_pompa'=>'Pompa Sumur','aksi'=>'ON','waktu'=>'2024-07-01 07:20:03'],
    ['nama_pompa'=>'Pompa Kolam','aksi'=>'OFF','waktu'=>'2024-07-01 08:11:45'],
    ['nama_pompa'=>'Pompa Tandon','aksi'=>'ON','waktu'=>'2024-07-01 10:05:00'],
    ['nama_pompa'=>'Pompa Kebun','aksi'=>'OFF','waktu'=>'2024-07-01 11:22:11'],
    ['nama_pompa'=>'Pompa Sawah','aksi'=>'ON','waktu'=>'2024-07-01 13:44:31'],
    ['nama_pompa'=>'Pompa Darurat','aksi'=>'OFF','waktu'=>'2024-07-01 15:02:02'],
    ['nama_pompa'=>'Pompa Aquarium','aksi'=>'ON','waktu'=>'2024-07-01 17:22:43'],
];
?>

<!-- TABLE DESKTOP -->
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

<!-- CARD LIST MOBILE -->
<div class="log-list-mobile">
    <?php if (empty($log_list)): ?>
        <div class="text-center my-4">
            <img src="https://cdn-icons-png.flaticon.com/512/458/458619.png" width="78" class="mb-2" alt="">
            <div class="text-muted small mb-2">Belum ada log aktivitas.<br>Belum ada aktivitas pompa.</div>
        </div>
    <?php endif; ?>
    <?php foreach($log_list as $log): ?>
    <div class="glass mb-3 p-3 d-flex align-items-center justify-content-between rounded-4 border-0 shadow-sm"
         style="border-left:6px solid <?= $log['aksi']=='ON'?'#34d399':'#a1a1aa' ?>">
        <div>
            <div class="fw-bold"><?= $log['nama_pompa']; ?></div>
            <div class="small"><?= $log['waktu']; ?></div>
            <span class="badge <?= $log['aksi']=='ON'?'bg-success':'bg-secondary' ?>"><?= $log['aksi']; ?></span>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php $this->load->view('inc/footer'); ?>

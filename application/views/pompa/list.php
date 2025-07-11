<?php $this->load->view('inc/header'); ?>
<?php $this->load->view('inc/sidebar'); ?>
<h4 class="fw-bold mb-4 mt-2">Manajemen Pompa Air</h4>
<?php
$pompa_list = [
    ['id_pompa'=>1,'nama_pompa'=>'Pompa Sumur','kode_pompa'=>'A-01'],
    ['id_pompa'=>2,'nama_pompa'=>'Pompa Kolam','kode_pompa'=>'B-02'],
    ['id_pompa'=>3,'nama_pompa'=>'Pompa Kebun','kode_pompa'=>'C-03'],
    ['id_pompa'=>4,'nama_pompa'=>'Pompa Tandon','kode_pompa'=>'D-04'],
    ['id_pompa'=>5,'nama_pompa'=>'Pompa Air Hujan','kode_pompa'=>'E-05'],
    ['id_pompa'=>6,'nama_pompa'=>'Pompa Aquarium','kode_pompa'=>'F-06'],
    ['id_pompa'=>7,'nama_pompa'=>'Pompa Sawah','kode_pompa'=>'G-07'],
    ['id_pompa'=>8,'nama_pompa'=>'Pompa Darurat','kode_pompa'=>'H-08'],
];
?>

<div class="mb-4 card card-body glass rounded-4 border-0 shadow-sm">
    <form>
        <div class="row g-2">
            <div class="col-12 col-md-5">
                <label class="form-label">Nama Pompa</label>
                <input type="text" name="nama_pompa" class="form-control rounded-3" required>
            </div>
            <div class="col-12 col-md-5">
                <label class="form-label">Kode Pompa</label>
                <input type="text" name="kode_pompa" class="form-control rounded-3" required>
            </div>
            <div class="col-12 col-md-2 d-grid align-items-end">
                <label class="form-label d-none d-md-block">&nbsp;</label>
                <button type="submit" class="btn btn-gradient w-100">Tambah</button>
            </div>
        </div>
    </form>
</div>

<!-- TABLE DESKTOP -->
<div class="table-responsive mb-3">
    <table class="table table-sm table-hover align-middle glass rounded-4">
        <thead class="table-light">
            <tr>
                <th>Nama Pompa</th>
                <th>Kode Pompa</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($pompa_list)): ?>
            <tr>
                <td colspan="3" class="text-center text-muted">Belum ada pompa yang terdaftar.</td>
            </tr>
            <?php endif; ?>
            <?php foreach($pompa_list as $pompa): ?>
            <tr>
                <td class="fw-bold"><?= $pompa['nama_pompa'] ?></td>
                <td><span class="text-muted"><?= $pompa['kode_pompa'] ?></span></td>
                <td>
                    <a href="#" class="btn btn-outline-danger btn-sm rounded-4"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- CARD LIST MOBILE -->
<div class="pompa-list-mobile">
    <?php if (empty($pompa_list)): ?>
        <div class="text-center my-4">
            <img src="https://cdn-icons-png.flaticon.com/512/2913/2913466.png" width="70" class="mb-2" alt="">
            <div class="text-muted small mb-2">Belum ada pompa yang terdaftar.<br>Tambah pompa dulu yuk!</div>
        </div>
    <?php endif; ?>
    <?php foreach($pompa_list as $pompa): ?>
    <div class="glass mb-3 p-3 d-flex justify-content-between align-items-center rounded-4 border-0 shadow-sm">
        <div>
            <div class="fw-bold"><?= $pompa['nama_pompa'] ?></div>
            <div class="small text-muted">Kode: <?= $pompa['kode_pompa'] ?></div>
        </div>
        <a href="#" class="btn btn-outline-danger btn-sm rounded-4"><i class="bi bi-trash"></i></a>
    </div>
    <?php endforeach; ?>
</div>
<?php $this->load->view('inc/footer'); ?>

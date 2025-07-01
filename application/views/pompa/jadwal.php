<?php $this->load->view('inc/header'); ?>
<?php $this->load->view('inc/sidebar'); ?>
<h4 class="fw-bold mb-4 mt-2">Jadwal Otomatis Pompa</h4>

<?php
$pompa_list = [
    ['id_pompa'=>1,'nama_pompa'=>'Pompa Sumur'],
    ['id_pompa'=>2,'nama_pompa'=>'Pompa Kolam'],
    ['id_pompa'=>3,'nama_pompa'=>'Pompa Kebun'],
    ['id_pompa'=>4,'nama_pompa'=>'Pompa Tandon'],
];
$jadwal_list = [
    ['id_jadwal'=>1,'nama_pompa'=>'Pompa Sumur','hari'=>'Senin','jam_mulai'=>'06:00','jam_selesai'=>'06:30','status'=>'aktif'],
    ['id_jadwal'=>2,'nama_pompa'=>'Pompa Kolam','hari'=>'Jumat','jam_mulai'=>'16:00','jam_selesai'=>'17:00','status'=>'nonaktif'],
    ['id_jadwal'=>3,'nama_pompa'=>'Pompa Tandon','hari'=>'Rabu','jam_mulai'=>'05:15','jam_selesai'=>'05:40','status'=>'aktif'],
    ['id_jadwal'=>4,'nama_pompa'=>'Pompa Kebun','hari'=>'Setiap Hari','jam_mulai'=>'04:00','jam_selesai'=>'05:00','status'=>'aktif'],
    ['id_jadwal'=>5,'nama_pompa'=>'Pompa Sumur','hari'=>'Minggu','jam_mulai'=>'14:10','jam_selesai'=>'14:40','status'=>'nonaktif'],
    ['id_jadwal'=>6,'nama_pompa'=>'Pompa Kolam','hari'=>'Sabtu','jam_mulai'=>'17:00','jam_selesai'=>'17:30','status'=>'aktif'],
];
?>

<div class="mb-4 card card-body glass rounded-4 border-0 shadow-sm">
    <form>
        <div class="row row-cols-1 row-cols-md-5 g-2 mb-2">
            <div>
                <label class="form-label">Pilih Pompa</label>
                <select class="form-control rounded-3" required>
                    <?php foreach($pompa_list as $pompa): ?>
                        <option value="<?= $pompa['id_pompa']; ?>"><?= $pompa['nama_pompa']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label class="form-label">Hari</label>
                <select class="form-control rounded-3" required>
                    <option value="">Pilih Hari</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                    <option value="Setiap Hari">Setiap Hari</option>
                    <option value="Custom">Lainnya...</option>
                </select>
            </div>
            <div>
                <label class="form-label">Jam Mulai</label>
                <input type="time" class="form-control rounded-3" required>
            </div>
            <div>
                <label class="form-label">Jam Selesai</label>
                <input type="time" class="form-control rounded-3" required>
            </div>
            <div class="d-flex align-items-end">
                <button type="submit" class="btn btn-gradient w-100">Jadwal</button>
            </div>
        </div>
    </form>
</div>

<!-- TABLE DESKTOP -->
<div class="table-responsive">
    <table class="table table-sm table-bordered bg-white">
        <thead class="table-light">
            <tr>
                <th>Pompa</th>
                <th>Hari</th>
                <th>Mulai</th>
                <th>Selesai</th>
                <th>Status</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($jadwal_list)): ?>
            <tr>
                <td colspan="6" class="text-center text-muted">Belum ada jadwal yang terdaftar.</td>
            </tr>
            <?php endif; ?>
            <?php foreach($jadwal_list as $jadwal): ?>
            <tr>
                <td><?= $jadwal['nama_pompa'] ?></td>
                <td><?= $jadwal['hari'] ?></td>
                <td><?= $jadwal['jam_mulai'] ?></td>
                <td><?= $jadwal['jam_selesai'] ?></td>
                <td>
                    <span class="badge <?= $jadwal['status']=='aktif'?'bg-success':'bg-secondary' ?>"><?= ucfirst($jadwal['status']) ?></span>
                </td>
                <td>
                    <a href="#" class="btn btn-outline-danger btn-sm rounded-4"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- CARD LIST MOBILE -->
<div class="jadwal-list-mobile">
    <?php if (empty($jadwal_list)): ?>
        <div class="text-center my-4">
            <img src="https://cdn-icons-png.flaticon.com/512/4076/4076500.png" width="82" class="mb-2" alt="">
            <div class="text-muted small mb-2">Belum ada jadwal yang terdaftar.<br>Yuk tambah jadwal baru!</div>
        </div>
    <?php endif; ?>
    <?php foreach($jadwal_list as $jadwal): ?>
    <div class="glass mb-3 p-3 d-flex justify-content-between align-items-center rounded-4 border-0 shadow-sm">
        <div>
            <div class="fw-bold"><?= $jadwal['nama_pompa'] ?></div>
            <div class="small">Hari: <b><?= $jadwal['hari'] ?></b> • <?= $jadwal['jam_mulai'] ?>–<?= $jadwal['jam_selesai'] ?></div>
            <span class="badge <?= $jadwal['status']=='aktif'?'bg-success':'bg-secondary' ?>"><?= ucfirst($jadwal['status']) ?></span>
        </div>
        <a href="#" class="btn btn-outline-danger btn-sm rounded-4"><i class="bi bi-trash"></i></a>
    </div>
    <?php endforeach; ?>
</div>
<?php $this->load->view('inc/footer'); ?>

<?php $this->load->view('inc/header'); ?>
<?php $this->load->view('inc/toastr'); ?>

<h4 class="fw-bold mb-4 mt-2 animate__animated animate__fadeInDown">Jadwal Otomatis Pompa</h4>
<div class="mb-4 card card-body glass rounded-4 border-0 shadow-sm">
    <form action="<?= site_url('pompa/tambah_jadwal') ?>" method="post" class="row row-cols-1 row-cols-md-5 g-2 mb-2">
        <div>
            <label class="form-label">Pilih Pompa</label>
            <select name="id_pompa" class="form-control rounded-3" required>
                <?php foreach($pompa_list as $pompa): ?>
                    <option value="<?= $pompa['id_pompa']; ?>"><?= $pompa['nama_pompa']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label class="form-label">Hari</label>
            <select name="hari" class="form-control rounded-3" required>
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
            <input type="time" name="jam_mulai" class="form-control rounded-3" required>
        </div>
        <div>
            <label class="form-label">Jam Selesai</label>
            <input type="time" name="jam_selesai" class="form-control rounded-3" required>
        </div>
        <div class="d-flex align-items-end">
            <button type="submit" class="btn btn-gradient w-100" style="min-width:120px;">
                <i class="bi bi-calendar-plus"></i> Jadwal
            </button>
        </div>
    </form>
</div>
<div class="table-responsive">
    <table class="table table-sm table-hover align-middle glass rounded-4">
        <thead class="table-light">
            <tr>
                <th>Pompa</th>
                <th>Hari</th>
                <th>Mulai</th>
                <th>Selesai</th>
                <th>Status</th>
                <th>Aksi</th>
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
                <td><?= $jadwal['nama_pompa']; ?></td>
                <td><?= $jadwal['hari']; ?></td>
                <td><?= $jadwal['jam_mulai']; ?></td>
                <td><?= $jadwal['jam_selesai']; ?></td>
                <td>
                    <span class="badge <?= $jadwal['status']=='aktif'?'bg-success':'bg-secondary' ?>"><?= ucfirst($jadwal['status']); ?></span>
                </td>
                <td>
                   <a href="<?= site_url('pompa/hapus/'.$pompa['id_pompa']) ?>"
                    class="btn btn-outline-danger btn-sm rounded-4 btn-hapus-modal"
                    data-href="<?= site_url('pompa/hapus/'.$pompa['id_pompa']) ?>">
                    <i class="bi bi-trash"></i>
                </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="jadwal-list-mobile">
        <?php if (empty($jadwal_list)): ?>
            <div class="text-center my-4">
            <img src="https://cdn-icons-png.flaticon.com/512/4076/4076500.png" width="82" class="mb-2" alt="">
            <div class="text-muted small mb-2">Belum ada jadwal yang terdaftar.<br>Yuk tambah jadwal baru!</div>
            </div>
        <?php endif; ?>
        <?php foreach($jadwal_list as $jadwal): ?>
            <div class="glass mb-3 p-3 d-flex align-items-center justify-content-between" style="border-left:6px solid <?= $jadwal['status']=='aktif'?'#34d399':'#a1a1aa' ?>">
            <div>
                <div class="fw-bold"><?= $jadwal['nama_pompa']; ?></div>
                <div class="small">Hari: <b><?= $jadwal['hari']; ?></b> • <?= $jadwal['jam_mulai']; ?>–<?= $jadwal['jam_selesai']; ?></div>
                <span class="badge <?= $jadwal['status']=='aktif'?'bg-success':'bg-secondary' ?>"><?= ucfirst($jadwal['status']); ?></span>
            </div>
            <a href="<?= site_url('pompa/hapus_jadwal/'.$jadwal['id_jadwal']); ?>"
                class="btn btn-outline-danger btn-sm rounded-4 btn-hapus-modal"
                data-href="<?= site_url('pompa/hapus_jadwal/'.$jadwal['id_jadwal']); ?>"><i class="bi bi-trash"></i></a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php $this->load->view('inc/footer'); ?>

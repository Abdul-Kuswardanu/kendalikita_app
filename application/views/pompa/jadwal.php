<?php $this->load->view('inc/header'); ?>
<?php $this->load->view('inc/toastr'); ?>

<h4 class="fw-bold mb-4 mt-2">Jadwal Otomatis Pompa</h4>
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
            <button type="submit" class="btn btn-gradient w-100">Jadwal</button>
        </div>
    </form>
</div>
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
                <a href="<?= site_url('pompa/hapus_jadwal/'.$jadwal['id_jadwal']) ?>" onclick="return confirm('Hapus jadwal?')" class="btn btn-outline-danger btn-sm rounded-4"><i class="bi bi-trash"></i></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php $this->load->view('inc/footer'); ?>

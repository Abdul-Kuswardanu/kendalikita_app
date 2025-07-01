<?php $this->load->view('inc/header'); ?>
<?php $this->load->view('inc/sidebar'); ?>

<h4 class="fw-bold mb-4 mt-2">Dashboard Pompa Air</h4>

<div class="card glass mb-3 p-3 border-0 rounded-4 d-flex flex-row align-items-center" style="background:linear-gradient(97deg,#e0f2fe 60%,#f4faff 100%);min-height:84px;">
    <div class="d-flex align-items-center justify-content-center me-3" style="width:54px;height:54px;background:rgba(14,165,233,0.14);border-radius:14px;">
        <i class="bi bi-emoji-smile fs-2 text-info"></i>
    </div>
    <div>
        <div class="fw-bold fs-5">Hai, selamat datang di KendaliKita!</div>
        <div class="text-muted" id="clockNow" style="font-size:1.04em;font-weight:500;"></div>
    </div>
</div>
<script>
function updateClock() {
  const el = document.getElementById('clockNow');
  if(!el) return;
  let now = new Date();
  let h = now.getHours().toString().padStart(2,0);
  let m = now.getMinutes().toString().padStart(2,0);
  let s = now.getSeconds().toString().padStart(2,0);
  let hari = ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'][now.getDay()];
  el.textContent = `${hari}, ${h}:${m}:${s}`;
}
setInterval(updateClock, 1000); updateClock();
</script>

<?php
$pompa_list = [
    ['nama_pompa'=>'Pompa Sumur','kode_pompa'=>'A-01','status'=>'ON'],
    ['nama_pompa'=>'Pompa Kolam','kode_pompa'=>'B-02','status'=>'OFF'],
    ['nama_pompa'=>'Pompa Kebun','kode_pompa'=>'C-03','status'=>'ON'],
];
$jadwal_aktif = [
    ['nama_pompa'=>'Pompa Sumur','hari'=>'Senin','jam_mulai'=>'06:00','jam_selesai'=>'06:30'],
    ['nama_pompa'=>'Pompa Kebun','hari'=>'Jumat','jam_mulai'=>'16:00','jam_selesai'=>'17:00'],
];
?>

<h6 class="mt-4 mb-2">Status Pompa Air</h6>
<div class="row g-2">
    <?php foreach($pompa_list as $pompa): ?>
    <div class="col-12 col-md-6">
        <div class="card glass p-3 mb-2 border-0 d-flex flex-row align-items-center justify-content-between">
            <div>
                <div class="fw-bold"><?= $pompa['nama_pompa'] ?></div>
                <small class="text-muted">Kode: <?= $pompa['kode_pompa'] ?></small>
            </div>
            <span class="badge badge-status <?= $pompa['status']=='ON'?'bg-success':'bg-secondary' ?> px-3 py-2"><?= $pompa['status'] ?></span>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<h6 class="mt-4 mb-2">Jadwal Penyiraman Aktif</h6>
<table class="table table-sm glass rounded-3 mb-4">
    <thead class="table-light">
        <tr>
            <th>Pompa</th><th>Hari</th><th>Mulai</th><th>Selesai</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($jadwal_aktif)): ?>
            <tr><td colspan="4" class="text-center text-muted">Belum ada jadwal aktif.</td></tr>
        <?php endif; ?>
        <?php foreach($jadwal_aktif as $jadwal): ?>
            <tr>
                <td><?= $jadwal['nama_pompa'] ?></td>
                <td><?= $jadwal['hari'] ?></td>
                <td><?= $jadwal['jam_mulai'] ?></td>
                <td><?= $jadwal['jam_selesai'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php $this->load->view('inc/footer'); ?>

<?php $this->load->view('inc/header'); ?>
<?php $this->load->view('inc/toastr'); ?>

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

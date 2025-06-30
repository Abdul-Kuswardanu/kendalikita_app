</div>
<nav class="navbar nav-bottom bg-white border-top d-flex justify-content-around animated-bottomnav">
    <a href="<?= site_url('pompa/dashboard') ?>" class="nav-link text-center py-2 nav-anim <?= uri_string() == 'pompa/dashboard' ? 'active fw-bold' : '' ?>">
        <span class="nav-anim-icon"><i class="bi bi-speedometer2 fs-4"></i></span>
        <div style="font-size:0.91em;">Dashboard</div>
        <span class="nav-underline"></span>
    </a>
    <a href="<?= site_url('pompa') ?>" class="nav-link text-center py-2 nav-anim <?= (uri_string() == 'pompa' || uri_string() == 'pompa/list') ? 'active fw-bold' : '' ?>">
        <span class="nav-anim-icon"><i class="bi bi-droplet-half fs-4"></i></span>
        <div style="font-size:0.91em;">Pompa</div>
        <span class="nav-underline"></span>
    </a>
    <a href="<?= site_url('pompa/jadwal') ?>" class="nav-link text-center py-2 nav-anim <?= uri_string() == 'pompa/jadwal' ? 'active fw-bold' : '' ?>">
        <span class="nav-anim-icon"><i class="bi bi-calendar-check fs-4"></i></span>
        <div style="font-size:0.91em;">Jadwal</div>
        <span class="nav-underline"></span>
    </a>
    <a href="<?= site_url('pompa/log') ?>" class="nav-link text-center py-2 nav-anim <?= uri_string() == 'pompa/log' ? 'active fw-bold' : '' ?>">
        <span class="nav-anim-icon"><i class="bi bi-activity fs-4"></i></span>
        <div style="font-size:0.91em;">Log</div>
        <span class="nav-underline"></span>
    </a>
</nav>
<div class="modal fade modal-confirm" id="modalHapus" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="hapusModalLabel"><i class="bi bi-trash"></i> Konfirmasi Hapus</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">Yakin ingin menghapus data ini?</div>
      <div class="modal-footer border-0 pt-0">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a href="#" id="btn-confirm-hapus" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>
<script>
  // Modal hapus universal
  document.querySelectorAll('.btn-hapus-modal').forEach(function(btn){
    btn.addEventListener('click', function(e){
      e.preventDefault();
      document.getElementById('btn-confirm-hapus').href = this.dataset.href;
      new bootstrap.Modal(document.getElementById('modalHapus')).show();
    });
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Auto-focus input pertama pada form (khusus tambah pompa/jadwal)
  document.addEventListener("DOMContentLoaded", function(){
    let f = document.querySelector('form input, form select');
    if(f) f.focus();
  });
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  var hariSelect = document.querySelector('select[name="hari"]');
  if (hariSelect) {
    hariSelect.addEventListener('change', function() {
      var customInput = document.getElementById('inputCustomHari');
      if (this.value === 'Custom') {
        if (!customInput) {
          var input = document.createElement('input');
          input.type = 'text';
          input.name = 'hari_custom';
          input.id = 'inputCustomHari';
          input.className = 'form-control rounded-3 w-100 mt-2';
          input.placeholder = 'Isi hari custom (misal: Senin-Kamis)';
          this.parentNode.appendChild(input);
        }
      } else {
        if (customInput) customInput.remove();
      }
    });
  }
});
</script>
<script>
document.querySelectorAll('.nav-anim').forEach(function(link){
    link.addEventListener('click', function(e){
        this.querySelector('.nav-anim-icon').style.transform = 'scale(1.18) translateY(-2px) rotate(-10deg)';
        setTimeout(()=>{ this.querySelector('.nav-anim-icon').style.transform = ''; }, 230);
    });
});
</script>
</body>
</html>

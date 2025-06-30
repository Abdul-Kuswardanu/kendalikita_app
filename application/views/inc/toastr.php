<?php if (isset($toast)): ?>
  <div class="alert alert-success shadow" style="position:fixed;top:22px;left:50%;transform:translateX(-50%);z-index:1200;min-width:220px;">
    <strong><?= $toast['msg'] ?></strong>
  </div>
  <script>
    setTimeout(function(){
      var toast = document.querySelector('.alert');
      if (toast) { toast.style.opacity=0; setTimeout(function(){ toast.remove(); }, 450); }
    }, 1800);
  </script>
<?php endif; ?>

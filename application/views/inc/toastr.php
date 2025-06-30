<?php if (isset($toast)): ?>
  <div class="toast-alert show" role="alert">
    <strong><?= $toast['msg'] ?></strong>
  </div>
  <script>
    setTimeout(function(){
      var toast = document.querySelector('.toast-alert');
      if (toast) {
        toast.classList.remove('show');
        setTimeout(function(){ if(toast)toast.remove(); }, 550);
      }
    }, 2200);
  </script>
<?php endif; ?>

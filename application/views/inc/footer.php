        </div> <!-- Tutup .container-fluid -->
    </div> <!-- Tutup .main-content -->
</div> <!-- Tutup .wrapper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Toggle sidebar on mobile
    document.addEventListener('DOMContentLoaded', function() {
        var sidebar = document.getElementById('sidebar');
        var openBtn = document.getElementById('btnOpenSidebar');
        var closeBtn = document.getElementById('btnCloseSidebar');
        if(openBtn) openBtn.onclick = function(){
            sidebar.classList.add('show');
            document.body.classList.add('sidebar-open');
        }
        if(closeBtn) closeBtn.onclick = function(){
            sidebar.classList.remove('show');
            document.body.classList.remove('sidebar-open');
        }
        // Tutup sidebar jika klik di luar sidebar pada mobile
        document.addEventListener('click', function(e) {
            if(window.innerWidth < 992 && sidebar.classList.contains('show')) {
                if(!sidebar.contains(e.target) && !openBtn.contains(e.target)) {
                    sidebar.classList.remove('show');
                    document.body.classList.remove('sidebar-open');
                }
            }
        });
    });
</script>
</body>
</html>

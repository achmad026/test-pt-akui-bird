<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url('assets/'); ?>img/data/akui_bird.png" style="width: 50px; height: 50px;">
        </div>
        <div class="sidebar-brand-text mx-3">PT AKUI BIRD</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('admin/dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        HALAMAN
    </div>
    <li class="nav-item">
        <a class="nav-link" href="https://akuibirdnest.com/id/about-akui-bird-nest/">
            <i class="fas fa-ban"></i>
            <span>Tentang</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        USER
    </div>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Log Out</span>
        </a>
    </li>  
</ul>
<!-- Sidebar -->
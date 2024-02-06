<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="<?= base_url('assets/images/logo.png') ?>" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name"><?= session()->get('username') ?></p>
                    <p class="designation"><?= session()->get('role') ?></p>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">Main Menu</li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/double-number-merger') ?>">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Double Number Entry</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/foriegn-service-entry') ?>">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Foreign Service Entry</span>
            </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Tables</span>
            </a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('logout') ?>">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
</nav>
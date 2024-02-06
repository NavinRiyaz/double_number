<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
            <img src="<?= base_url('assets/images/logo_white.png') ?>" alt="logo" /> 
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="<?= base_url('assets/images/logo.png') ?>" alt="logo" /> 
        </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                <a class="nav-link" id="UserDropdown" href="#">
                    <img class="img-xs rounded-circle" src="<?= base_url('assets/images/logo.png') ?>" alt="Profile">
                </a>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
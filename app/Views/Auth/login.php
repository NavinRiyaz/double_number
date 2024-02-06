<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contributory Pension Scheme | Government of TamilNadu | Government Data Center</title>
    <link rel="stylesheet" href="<?= base_url("assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/vendors/iconfonts/ionicons/dist/css/ionicons.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/vendors/css/vendor.bundle.base.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/vendors/css/vendor.bundle.addons.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/shared/style.css") ?>">
    <link rel="shortcut icon" href="<?= base_url("assets/images/logo.png") ?>" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <div class="auto-form-wrapper">
                            <form method="post" action="">
                                <div class="form-group">
                                    <label class="label">Username</label>
                                    <div class="input-group">
                                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?= set_value('username') ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="label">Password</label>
                                    <div class="input-group">
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button name="submit" type="submit" class="btn btn-primary submit-btn btn-block">Login</button>
                                </div>
                            </form>
                        </div>
                        <p class="footer-text text-center">Developed By</p>
                        <p class="footer-text text-center text-center"><a href="https://www.gdc.tn.gov.in/" target="_blank"> Government Data Centre</a></p>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url("assets/vendors/js/vendor.bundle.base.js") ?>"></script>
    <script src="<?= base_url("assets/vendors/js/vendor.bundle.addons.js") ?>"></script>
</body>

</html>
<!--Page Title-->
<div class="page section-header text-center">
    <div class="page-title">
        <div class="wrapper">
            <h1 class="page-width">Reset Password</h1>
        </div>
    </div>
</div>
<!--End Page Title-->

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
            <div class="mb-4">
                <?php if (isset($_COOKIE['doimk'])) { ?>
                    <div class="alert alert-success">
                        <strong>Thông báo</strong> <?= $_COOKIE['doimk'] ?>
                    </div>
                <?php } ?>
                <?php if (isset($_COOKIE['doimk_error'])) { ?>
                    <div class="alert alert-danger ">
                        <strong>Thông báo</strong> <?= $_COOKIE['doimk_error'] ?>
                    </div>
                <?php } ?>
                <form method="post" action="?act=taikhoan&xuli=forgot" id="form1" class="contact-form">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="CustomerEmail">Username</label>
                                <input type="text" name="taikhoan" placeholder="" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" autofocus="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="CustomerPassword">Old Password</label>
                                <input type="password" name="MatKhau" placeholder="" id="CustomerPassword" class="" required minlength="6">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="CustomerPassword">Password</label>
                                <input type="password" name="MatKhauMoi" placeholder="" id="CustomerPassword" class="" required minlength="6">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="CustomerPassword">Check Password</label>
                                <input type="password" name="MatKhauXN" placeholder="" id="CustomerPassword" class="" required minlength="6">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                            <button type="submit" name="submit" class="btn mb-3">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
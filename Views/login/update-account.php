<div class="page section-header text-center">
    <div class="page-title">
        <div class="wrapper">
            <h1 class="page-width">Update Account Information</h1>
        </div>
    </div>
</div>
<!--End Page Title-->

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
            <div class="mb-4">
                <?php if (isset($_COOKIE['msg_success'])) { ?>
                    <div class="alert alert-success">
                        <strong>Thông báo</strong> <?= $_COOKIE['msg_success'] ?>
                    </div>
                <?php } ?>
                <?php if (isset($_COOKIE['msg_error'])) { ?>
                    <div class="alert alert-danger">
                        <strong>Thông báo</strong> <?= $_COOKIE['msg_error'] ?>
                    </div>
                <?php } ?>
                <form method="post" action="?act=taikhoan&xuli=capnhat" id="CustomerLoginForm" class="contact-form">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="FirstName">First Name</label>
                                <input type="text" name="Ten" placeholder="" id="FirstName" autofocus="" required value="<?php echo $_SESSION['Ten'] ?>">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="LastName">Last Name</label>
                                <input type="text" name="Ho" placeholder="" id="LastName" required value="<?php echo $_SESSION['Ho'] ?>">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="Username">Username</label>
                                <input type="text" name="TaiKhoan" placeholder="" id="Username" required minlength="5" value=<?php echo $_SESSION['TaiKhoan'] ?>>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="CustomerEmail">Email</label>
                                <input type="email" name="Email" placeholder="" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" autofocus="" required value=<?php echo $_SESSION['Email'] ?>>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="Phone">Phone</label>
                                <input type="text" name="SĐT" placeholder="" id="Phone" required pattern="[0-9]+" minlength="10" value=<?php echo $_SESSION['SDT'] ?>>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                            <input type="submit" class="btn mb-3" form="CustomerLoginForm" value="Update Account">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
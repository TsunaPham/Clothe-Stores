<!--Page Title-->
<div class="page section-header text-center">
    <div class="page-title">
        <div class="wrapper">
            <h1 class="page-width">Personal Information</h1>
        </div>
    </div>
</div>
<!--End Page Title-->

<div class="container">
    <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
        <div class="card p-4">
            <div class=" image d-flex flex-column justify-content-center align-items-center">
                <img src="https://cdn.dribbble.com/users/1600854/screenshots/10838441/media/b60ab332b46161561702a1468cd4c286.jpg" height="200" width="300" />
                <span class="h1 mt-3">
                    <?php echo $_SESSION['Ho'] . " " . $_SESSION['Ten'] . " " ?>
                </span>
                <span class="font-weight-bold mb-2 h3"><?php echo $_SESSION['Email'] ?></span>
                <div class="d-flex flex-row h3">
                    <span><i class="fa fa-phone mr-2"></i></span>
                    <span class="ms-1"><?php echo $_SESSION['SDT'] ?></span>
                </div>
                <div class="d-flex flex-row h3">
                    <span><i class="fa fa-user mr-2"></i></span>
                    <span class="ms-1"><?php echo $_SESSION['TaiKhoan'] ?></span>
                </div>
                <a href="?act=update-account"><button class="btn btn-dark mt-3">Edit Profile</button></a>
            </div>
        </div>
    </div>
</div>
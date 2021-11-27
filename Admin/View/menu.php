<?php
$act = isset($_GET['act']) ? $_GET['act'] : "home";
$_SESSION['act_now'] = $act;
?>
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="?act=home"> <img alt="image" src="assets/img/logo-1.png" class="header-logo" /> <span class="logo-name">HCMUT</span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Main</li>
      <li class="<?php if ($_SESSION['act_now'] === 'home') echo "dropdown active" ?>">
        <a href="?act=home" name="act" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
      </li>
      <li class="<?php if ($_SESSION['act_now'] === 'view-acc') echo "dropdown active" ?>"><a class="nav-link" href="?act=view-acc"><i data-feather="users"></i><span>Account</span></a></li>
      <li class="<?php if ($_SESSION['act_now'] === 'mail') echo "dropdown active" ?>"><a class="nav-link" href="?act=mail"><i data-feather="mail"></i><span>Email</span></a></li>
      <li class="<?php if ($_SESSION['act_now'] === 'view-product') echo "dropdown active" ?>"><a class="nav-link" href="?act=view-product"><i data-feather="briefcase"></i><span>Product</span></a></li>
      <li class="<?php if ($_SESSION['act_now'] === 'view-type') echo "dropdown active" ?>"><a class="nav-link" href="?act=view-type"><i data-feather="clipboard"></i><span>Product-Type</span></a></li>
      <li class="<?php if ($_SESSION['act_now'] === 'order') echo "dropdown active" ?>"><a class="nav-link" href="?act=order"><i data-feather="sliders"></i><span>Order</span></a></li>
      <li class="<?php if ($_SESSION['act_now'] === 'view-cate') echo "dropdown active" ?>"><a class="nav-link" href="?act=view-cate"><i data-feather="box"></i><span>Category</span></a></li>
    </ul>
  </aside>
</div>
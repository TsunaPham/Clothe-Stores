<!--Collection Banner-->
<div class="collection-header">
  <div class="collection-hero">
    <div class="collection-hero__image"><img class="blur-up lazyload" data-src="assets/images/cat-women2.jpg" src="assets/images/cat-women2.jpg" alt="Women" title="Women" /></div>
    <div class="collection-hero__title-wrapper">
      <h1 class="collection-hero__title page-width">SHOP</h1>
    </div>
  </div>
</div>
<!--End Collection Banner-->

<div class="container" style="padding-top : 55px;">
  <div class="row">
    <!--Sidebar-->

    <?php require_once('category.php'); ?>

    <!--Main Content-->
    <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
      <div class="category-description">
        <h3>Product of Shop</h3>
      </div>
      <hr>
      <div class="productList">
        <!--Toolbar-->
        <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
        <div class="toolbar">
          <div class="filters-toolbar-wrapper">
            <div class="row">
              <div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
              </div>
              <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                <span class="filters-toolbar__product-count">Showing: <?= $data_tong ?></span>
              </div>


            </div>
          </div>
        </div>
        <!--End Toolbar-->

        <?php require_once('list-products.php'); ?>


      </div>
      <hr class="clear">
      <div class="pagination">
        <ul>
          <?php if ($data_tong > 9 and isset($test)) {
            for ($i = 1; $i <= $data_tong / 5; $i++) { ?>
              <li><a href="?act=shop&trang=<?= $i ?>"><?= $i ?></a></li>
          <?php }
          }
          ?>
          <li class="next"><a href=""><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
    <!--End Main Content-->
  </div>
</div>
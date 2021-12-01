<div class="section-body">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Add Product</h4>
        </div>
        <div class="card-body">
          <form class="" action="?act=view-type&run=edit" method="post">
          <input type="hidden" name="MaLSP" value="<?=$data['MaLSP']?>">
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
              <div class="col-sm-12 col-md-7">
                <select class="form-control selectric" name="MaDM" value="<?=$data['MaDM']?>">
                  <option value=1>Woman</option>
                  <option value=2>Man</option>
                  <option value=123>Unisex</option>
                </select>
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name Type Product</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" name="TenLSP" value="<?=$data['TenLSP']?>">
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
              <div class="col-sm-12 col-md-7">
                <button class="btn btn-primary">Create Type</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
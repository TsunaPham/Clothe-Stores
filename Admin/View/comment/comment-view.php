<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="buttons">
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Comment View</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Tựa đề</th>
                                    <th>Nội dung</th>
                                    <th>Ngày Comment</th>
                                    <th>Mã SP</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data as $value){ ?>
                          <tr>
                            <td><?=$value['TenUser']?></td>
                            <td><?=$value['Email']?></td>
                            <td><?=$value['Tomtat']?></td>
                            <td><?=$value['Noidung']?></td>
                            <td><?=$value['NgayCom']?></td>
                            <td><?=$value['MaSP']?></td>
                          </tr>
                        <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
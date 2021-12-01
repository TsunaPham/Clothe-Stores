<?php
require_once("Model/comment_db.php");
class Comment_CT
{
    var $comment_md;
    public function __construct()
    {
        $this->comment_md = new comment();
    }
    public function list()
    {
        $data = $this->comment_md->list_all_method();
        require_once("View/index.php");
    }
    public function delete()
    {
    $id = $_GET['id'];
    $this->comment_md->delete($id);
    header('Location:?act=view-com');
  }
  public function add()
  {
      $data = array(
          'Ho' =>    $_POST['Ho'],
          'Ten'  =>   $_POST['Ten'],
          'GioiTinh' => $_POST['GioiTinh'],
          'SDT' => $_POST['SDT'],
          'Email' =>    $_POST['Email'],
          'DiaChi'  =>   $_POST['DiaChi'],
          'TaiKhoan' => $_POST['TaiKhoan'],
          'MatKhau' => md5($_POST['MatKhau']),
          'MaQuyen' =>  '1',
          'TrangThai'  =>  '1'
      );
      foreach ($data as $key => $value) {
          if (strpos($value, "'") != false) {
              $value = str_replace("'", "\'", $value);
              $data[$key] = $value;
          }
      }
      $this->comment_md->add($data);
      header('Location:?act=view-com');
  }
  public function gopage(){
    require 'View/index.php';
  }
  public function go_edit()
    {
    $id = isset($_GET['id']) ? $_GET['id'] : 1;
    $data = $this->comment_md->find($id);
    require_once("View/index.php");
    }
    public function update()
    {
    $data = array(
        'ComID' => $_POST['ComID'],
        'TenUser' =>    $_POST['TenUser'],
        'Email'  =>   $_POST['Email'],
        'Tomtat' => $_POST['Tomtat'],
        'Noidung' => $_POST['Noidung'],
        'NgayCom' =>    $_POST['NgayCom'],
        'MaSP'  =>   $_POST['MaSP']
    );
    foreach ($data as $key => $value) {
        if (strpos($value, "'") != false) {
            $value = str_replace("'", "\'", $value);
            $data[$key] = $value;
        }
    }
    $this->comment_md->update($data);
    header('Location:?act=view-com');
  }
}

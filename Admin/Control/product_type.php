<?php
require_once("Model/product_type_db.php");
class Product_type_CT
{
    var $product_type_md;
    public function __construct()
    {
        $this->product_type_md = new product_type();
    }
    public function list()
    {
        $data = $this->product_type_md->list_all_method();
        require_once("View/index.php");
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->product_type_md->delete($id);
        header('Location:?act=view-type');
    }
    public function gopage(){
        require 'View/index.php';
      }
    public function add()
    {
        $data = array(
            'TenLSP'  =>   $_POST['TenLSP'],
            'MaDM' =>    $_POST['MaDM'],
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->product_type_md->add($data);
        header('Location:?act=view-type');
    }
    public function go_edit()
    {
    $id = isset($_GET['id']) ? $_GET['id'] : 1;
    $data = $this->product_type_md->find($id);
    require_once("View/index.php");
    }
    public function update()
    {
        $data = array(
            'MaLSP' =>$_POST['MaLSP'],
            'TenLSP'  =>   $_POST['TenLSP'],
            'MaDM' =>    $_POST['MaDM'],
        );
    foreach ($data as $key => $value) {
        if (strpos($value, "'") != false) {
            $value = str_replace("'", "\'", $value);
            $data[$key] = $value;
        }
    }
    $this->product_type_md->update($data);
    header('Location:?act=view-type');
  }
}

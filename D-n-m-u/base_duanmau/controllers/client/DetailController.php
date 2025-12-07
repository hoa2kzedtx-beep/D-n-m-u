<?php
class DetailProductController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new Product();
    }

    public function show()
    {
        try {
            if (!isset($_GET["id"])) {
                throw new Exception("Không tồn tại tham số ID trên URL");
            }
            $id = $_GET["id"];
            // Lấy thông tin chi tiết sản phẩm trong CSDL
            $pro = $this->productModel->find($id);
            if (empty($pro)) {
                throw new Exception("ID không tồn tại trong CSDL");
            }
            var_dump($pro);
            // Cập nhật view_count 
            $view_count = $pro["view_count"] + 1;
            // Cập nhật trường view_count mới trong CSDL
            $this->productModel->updateViewCount($view_count, $id);

            $view = "detail-product";
            require_once PATH_VIEW_MAIN_CLIENT;
        } catch (Exception $ex) {
            throw new Exception("Có lỗi xảy ra");
        }

    }
}
?>
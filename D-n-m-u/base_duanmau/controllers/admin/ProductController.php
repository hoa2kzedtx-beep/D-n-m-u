<?php
// có class chứa các function thực thi xử lý logic 
class ProductController
{
    public $modelProduct;
    public $modelCat;

    public function __construct() {
        $this->modelProduct = new Product();
        $this->modelCat = new Category();
    }

    public function home() {
        $title = 'Đây là trang quản trị';
        require_once PATH_VIEW_MAIN_ADMIN;
    }
    
    public function index() {
        $view = 'product/index';
        $title = 'Danh sách Sản phẩm';
        // lấy danh sách từ csdl
        $data = $this->modelProduct->getAll();
        require_once PATH_VIEW_MAIN_ADMIN;
    }

    public function create() {
        // Hiển thị form tạo mới
        $view = 'product/create';
        $title = 'Tạo mới sản phẩm';
        // Đổ dữ liệu danh sách Category lên view tạo mới
        $categories = $this->modelCat->getAll();
        require_once PATH_VIEW_MAIN_ADMIN;
    }

    public function store() {
        // Hàm lưu vào CSDL
        try {
            
            $data = $_POST + $_FILES;
            // echo "<pre>";
            // var_dump($data);
            // xử lý ảnh
            if ($data["image"]["size"] > 0) {
                $data["image"] = upload_file('products', $data["image"]);
            } else {
                $data["image"] = null;
            }

            // Gọi đến model lưu $data vào CSDL
            $this->modelProduct->insert($data);

        } catch(Exeption $ex) {
            throw new Exception("Thao tác tạo mới lỗi");
        }
        // tạo mới thành công quay lại trang có form tạo mới
        header('Location:' .BASE_URL_ADMIN .'&action=create-product');
        exit();
    }
    public function delete() {
        try{
            if(!isset($_GET["id"])) {
                throw new Exception("Thiếu tham số id");
            }
            $id = $_GET["id"];
            // kiểm tra id có tồn tại trên hệ thống không
            $pro = $this->modelProduct->find($id);
            if (empty($pro)) {
                throw new Exception("Product không tồn tại id = $id");
            } else {
                // Nếu tồn tại id, xóa dữ liệu trong CSDL
                $this->modelProduct->delete($id);
            }

        } catch(Exeption $er) {
            throw new Exception("Thao tác xóa lỗi");
        }
         // tạo mới thành công quay lại trang có form tạo mới
        header('Location:' .BASE_URL_ADMIN .'&action=list-product');
        exit();

    }
    
}

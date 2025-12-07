<form action="<?= BASE_URL_ADMIN . '&action=store-product' ?>" method="POST" enctype="multipart/form-data">
    <div class="mt-3 mb-3">
        <label for="" class="form-label">Tên:</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mt-3 mb-3">
        <label for="" class="form-label">Danh mục:</label>
        <select name="category_id" id="" class="form-control">
            <?php foreach($categories as $cat) : ?>
            <option value="<?=$cat["id"]?>"><?=$cat["name"]?></option>
            <?php endforeach;?>
        </select>
    </div>
    <div class="mt-3 mb-3">
        <label for="" class="form-label">Mô tả:</label>
        <input type="text" name="description" class="form-control">
    </div>
    <div class="mt-3 mb-3">
        <label for="" class="form-label">Giá:</label>
        <input type="number" name="price" class="form-control">
    </div>
    <div class="mt-3 mb-3">
        <label for="" class="form-label">Số lượng:</label>
        <input type="number" name="quantity" class="form-control">
    </div>
    <div class="mt-3 mb-3">
        <label for="" class="form-label">Ảnh:</label>
        <input type="file" name="image" class="form-control">
    </div>
    <button class="btn btn-primary">Lưu</button>
</form>
<a href="<?=BASE_URL_ADMIN . '&action=list-product'?>">Quay lại trang danh sách</a>
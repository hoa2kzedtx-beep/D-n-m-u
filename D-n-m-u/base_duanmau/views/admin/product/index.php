<a href="<?= BASE_URL_ADMIN .'&action=create-product'?>" class="btn btn-primary">Tạo mới</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Ảnh</th>
            <th>Tên</th>
            <th>Danh mục</th>
            <th>Mô tả</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $pro) :?>
        <tr>
            <td><?= $pro["id"] ?></td>
            <td>
                <img src="<?= BASE_ASSETS_UPLOADS. $pro["image"] ?>" alt="" width="50">
            </td>
            <td><?= $pro["name"] ?></td>
            <td><?= $pro["cat_name"] ?></td>
            <td><?= $pro["description"] ?></td>
            <td><?= $pro["price"] ?></td>
            <td><?= $pro["quantity"] ?></td>
            <td>
                <a href="<?= BASE_URL_ADMIN .'&action=show-product&id='. $pro["id"]?>" class="btn btn-primary">Xem</a>
                <a href="<?= BASE_URL_ADMIN .'&action=edit-product&id='. $pro["id"]?>" class="btn btn-success">Sửa</a>
                <a href="<?= BASE_URL_ADMIN .'&action=delete-product&id='. $pro["id"]?>"
                 onclick="return confirm('Có chắc chắn muốn xóa không');" class="btn btn-danger">Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
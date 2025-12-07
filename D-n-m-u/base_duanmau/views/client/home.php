<!-- Slideshow -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../assets/uploads/slide1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../assets/uploads/slide2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../assets/uploads/slide3.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Hết slide -->
<!-- Khu vực sản phẩm -->
<h3 class="mt-3">Sản phẩm mới</h3>
<div class="row">
    <?php foreach ($top4Lastest as $pro): ?>
        <!-- Box sản phẩm -->
        <div class="col-3">
            <div class="border rounded mb-4">
                <div class="bg-light d-flex justify-content-center align-items-center" style="height: 400px;">
                    <img src="<?= BASE_ASSETS_UPLOADS . $pro["image"] ?>" alt="" class="mw-100 mh-100">
                </div>
                <!-- Hiển thị nội dung sản phẩm -->
                <div class="p-2 d-flex align-items-center justify-content-around">
                    <div>
                        <a href="<?= BASE_URL . '?action=detail-product&id=' . $pro["id"] ?>">
                            <h5><?= $pro["name"] ?></h5>
                        </a>
                        <span class="fw-bold"> <?= $pro["price"] ?> </span>
                    </div>
                    <button class="btn btn-danger">Mua ngay</button>
                </div>
            </div>
        </div>
        <!-- Hết Box sản phẩm -->
    <?php endforeach; ?>
    <!-- Khu vực sản phẩm -->
    <h3 class="mt-3">Sản phẩm được yêu thích nhiều nhất</h3>
    <div class="row">
        <?php foreach ($top4View as $pro): ?>
            <!-- Box sản phẩm -->
            <div class="col-3">
                <div class="border rounded mb-4">
                    <div class="bg-light d-flex justify-content-center align-items-center" style="height: 400px;">
                        <img src="<?= BASE_ASSETS_UPLOADS . $pro["image"] ?>" alt="" class="mw-100 mh-100">
                    </div>
                    <!-- Hiển thị nội dung sản phẩm -->
                    <div class="p-2 d-flex align-items-center justify-content-around">
                        <div>
                            <a href="<?= BASE_URL . '?action=detail-product&id=' . $pro["id"] ?>">
                                <h5><?= $pro["name"] ?></h5>
                            </a>
                            <span class="fw-bold"> <?= $pro["price"] ?> </span>
                        </div>
                        <button class="btn btn-danger">Mua ngay</button>
                    </div>
                </div>
            </div>
            <!-- Hết Box sản phẩm -->
        <?php endforeach; ?>
    </div>
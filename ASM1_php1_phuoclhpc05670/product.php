<?php

include "client/header.php";
?>
<div class="container py-5">
    <div class="row">

        <div class="col-lg-3">
            <h1 class="h2 pb-4">Danh mục</h1>
            <ul class="list-unstyled templatemo-accordion border rounded p-3">
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        Món ăn nổi bật
                        <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                    <ul class="collapse show list-unstyled pl-3">
                        <li><a class="text-decoration-none" href="#">Món chính</a></li>
                        <li><a class="text-decoration-none" href="#">Món phụ</a></li>
                        <li><a class="text-decoration-none" href="#">Đồ uống</a></li>
                        <li><a class="text-decoration-none" href="#">Tráng miệng</a></li>
                    </ul>
                </li>
            </ul>
        </div>


        <div class="col-lg-9">
            <!-- Product Content Goes Here -->
            <div class="row">
                <?php for ($i = 1; $i <= 6; $i++) { ?>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="assets/hambogo.jpg">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="/shop-single" class="h3 text-decoration-none">Hamboger</a>
                                <p class="mb-2">Mô tả sản phẩm: Hamburger với thịt bò tươi, sốt cà chua và rau xanh</p>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">Giá: 50.000 đồng</p>
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="#"><i class="fas fa-cart-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <ul class="pagination pagination-lg">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
include "client/footer.php";
?>
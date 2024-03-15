<?php
include "client/header.php";
?>

<section id="product-detail" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/hambogo.jpg" alt="Product Image" class="img-fluid" width="450px">
            </div>
            <div class="col-md-6 product-details">
                <h2>Hamboger</h2>
                <p>Giá: 50.000 đồng</p>
                <div class="product-description">
                    <h3>Mô Tả</h3>
                    <p>Mô tả sản phẩm: Hamburger với thịt bò tươi, sốt cà chua và rau xanh</p>
                </div>
                <div class="row align-items-center">
                    <div class="col-6 col-md-4 quantity d-flex align-items-center">
                        <label for="quantity" class="mr-3">Số lượng:</label>
                        <input type="number" id="quantity" name="quantity" min="1" value="1">
                    </div>
                    <div class="row col-3 col-md-12 mb-6 mb-md-0">
                        <button class="btn btn-success btn-block mt-3 mt-md-0">Thanh toán</button>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs mt-3">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Mô tả</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Bình luận</a>
            </li>
        </ul>
    </div>
</section>

<?php
include "client/footer.php";
?>

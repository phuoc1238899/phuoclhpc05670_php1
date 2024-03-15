<?php
include "client/header.php"; 
?>

<section id="new-arrival" class="product-store py-5">
    <div class="container">
        <h2 class="display-5 fw-light text-uppercase text-center mb-5">New Arrivals</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <?php for ($i = 0; $i < 8; $i++) { ?>
                <div class="col">
                    <div class="card border-0 shadow">
                        <div class="position-relative">
                            <img src="assets/hambogo.jpg" alt="Books" class="card-img-top" width="300px" height="220px">
                            <div class="badge bg-dark position-absolute top-0 start-0 m-3">New</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Hamboger</h5>
                            <p class="card-text text-center">Giá: 50.000 đồng</p>
                            <div class="d-flex justify-content-center">
                            </div>
                            <div class="d-flex justify-content-center mt-2">
                                <img src="assets/star.png" alt="Star" width="20px">
                                <img src="assets/star.png" alt="Star" width="20px">
                                <img src="assets/star.png" alt="Star" width="20px">
                                <img src="assets/star.png" alt="Star" width="20px">
                                <img src="assets/star.png" alt="Star" width="20px">
                            </div>
                            <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="#"><i class="fas fa-cart-plus"></i></a></li>
                                </ul>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<div class="text-center mt-5 mb-5 pt-4">
    <a href="#" class="btn btn-dark rounded-3">View All Products</a>
</div>

<?php
include "client/footer.php";
?>

<style>
    .section-wrapper {
        padding: 0px 0;
    }

    .slide {
        font-size: 20px;
    }
</style>

<!-- main wrapper start -->
<div class="main-wrapper" id="main-wrapper">
    <!-- breadcrumb start -->
    <section class="section-wrapper breadcrumb-wrapper" id="breadcrumb-wrapper">
        <div class="sqaure">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="breadcrumb-block">
                            <h2 class="glowIn">All categories</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- Category page start -->
    <section class="section-wrapper category-page">
        <div class="container">
            <div class="row">
                <?php
                foreach ($student as $data) {
                ?>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3" style="margin-top: 70px;">
                        <div class="product-item" data-aos="fade-in">
                            <div class="product-image">
                                <span class="sale">Save 58%</span>
                                <a href="<?= base_url('beauty/product/' . $data->id); ?>" class="card-images"><img src="<?php echo base_url(UPLOAD . $data->image); ?>" alt="product-image"></a>
                                <a href="#" class="whislist"><img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/whishlist.svg" alt="icon"></a>
                            </div>
                            <div class="product-content">
                                <h5><a href="<?= base_url('beauty/product/' . $data->id); ?>"><?php echo $data->name ?></a></h5>
                                <span class="price"><?php echo ($data->price) ?>.00<span class="previous-price">$ 152</span></span>
                                <a href="<?= base_url('beauty/direct_cart/' . $data->id); ?>" class="cart"><img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/cart.svg" alt="icon"></a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                <div class="col-12 col-sm-12 col-md-12 text-center">
                    <nav class="pagination" data-aos="fade-up">
                        <ul>
                            <div id="pagination">
                                <ul class="tsc_pagination">
                                    <li>
                                        <?php echo $links; ?>
                                    </li>
                                </ul>
                            </div>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Category page end -->

</div>
<!-- main wrapper end -->
<!-- Once time model open start -->
<div id="myModal" class="modal fade modeltime" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close modeltimeclose" data-dismiss="modal"><img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/close.svg" alt="close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="model-wrapper">
                            <div class="model-description">
                                <img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/logo.svg" alt="logo">
                                <h2>Welcome</h2>
                                <p>Hendrerit amet tortor vulputate erat vitae accumsan. Sed augue iaculis ullamcorper enim mauris. Quis varius id tristique euismod. Sem egestas mauris id amet hac lacinia nisi morbi nibh. Ipsum elementum pulvinar vestibulum convallis nec hendrerit fames mollis</p>
                                <p>Agree that you have read our <a href="<?= base_url('frontend/terms_services') ?>">Terms & condition</a>, <a href="<?= base_url('frontend/privacy_policy') ?>">Privacy policy</a> & <a href="<?= base_url('frontend/cookie_policy') ?>">Cookie policy</a> by pressing continue</p>
                                <div class="theme-button">
                                    <a href="#" data-dismiss="modal" class="submit-btn">Continue</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Once time model open end -->
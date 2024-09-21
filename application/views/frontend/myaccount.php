<style>
    .section-wrapper {
        padding: 0px 0;
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
                            <h2 class="glowIn">My Account</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- Account page start -->
    <section class="section-wrapper common-form shipping-page">
        <div class="container" style="margin-top: 70px;">
            <div class="row">
                <!-- Title page start -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-5 gojo">
                    <?php
                    if (isset($array)) { ?>
                        <h4>Hey <?php echo $array['fname']; ?> <?php echo $array['lname']; ?></h4>
                        <h6><?php echo $array['email']; ?></h6>
                    <?php
                    } else { ?>
                        <h4 style="margin-bottom: 20px;">Hey Login Account</h4>
                    <?php } ?>

                    <div class="goku">
                        <a href="<?= base_url('beauty/my_account') ?>">Order History</a>
                        <hr>
                        <a href="<?= base_url('beauty/profile') ?>">Profile</a>
                        <hr>
                        <a href="<?= base_url('beauty/address') ?>">Address</a>
                        <hr>
                        <?php if (isset($array['id'])) { ?>
                            <a href="<?= base_url('beauty/logout/' . $array['id']); ?>">Log Out</a>
                        <?php } else { ?>
                            <a href="#">Log Out</a>
                        <?php } ?>
                        <hr>
                        <div class="gohan">Need Help?</div>
                        <p>Info@mail.com</p>
                    </div>
                </div>
                <!-- Title page end -->

                <!-- Cart page start -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                    <section class="section-wrapper cart-page">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-8 mb-3">
                                    <div class="all-cart" data-aos="fade-left">
                                        <div class="account-header cart-header">
                                            <div class="product">
                                                <span>Product</span>
                                            </div>
                                            <div class="price">
                                                <span>Price</span>
                                            </div>
                                            <div class="item">
                                                <span>Item</span>
                                            </div>
                                            <div class="sub-total">
                                                <span>total</span>
                                            </div>
                                        </div>
                                        <?php
                                        // echo "<pre>";print_r($order);die;   
                                        foreach ($order as $data) {
                                        ?>
                                            <div class="cart-item">
                                                <div class="cart-image">
                                                    <img src="<?php echo base_url(PRODUCT . $data['image']); ?>" width="15%">
                                                </div>
                                                <div class="cart-content">
                                                    <div class="cart-title">
                                                        <h4><?php echo $data['name']; ?> 150 ML</h4>
                                                    </div>
                                                </div>
                                                <div class="total">
                                                    <span>$<?php echo $data['price']; ?></span>
                                                </div>
                                                <div class="increment">
                                                    <div class="input">
                                                        <!-- <button class="minus" aria-label="Decrease by one" disabled>
                                                            <img src="<?= base_url('public/frontend/images/icon/minus.svg'); ?>" alt="icon">
                                                        </button> -->
                                                        <div class="number dim"><?php echo $data['quantity']; ?></div>
                                                        <!-- <button class="plus" aria-label="Increase by one">
                                                            <img src="<?= base_url('public/frontend/images/icon/plus.svg'); ?>" alt="icon">
                                                        </button> -->
                                                    </div>
                                                </div>
                                                <div class="total">
                                                    <span>$<?php echo $data['total']; ?></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Cart page end -->
            </div>
        </div>
    </section>
    <!--Account page end -->
</div>
<!-- main wrapper end -->.
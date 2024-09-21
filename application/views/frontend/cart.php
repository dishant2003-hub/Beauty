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
                            <h2 class="glowIn">Your cart</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- Cart page start -->
    <section class="section-wrapper cart-page">
        <div class="container" style="margin-top: 100px;">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-9 order-2 order-lg-1 mb-5">
                    <div class="all-cart" data-aos="fade-right">
                        <div class="account-header cart-header">
                            <div class="product">
                                <span>Product</span>
                            </div>
                            <div class="price">
                                <span>Price</span>
                            </div>
                            <div class="item">
                                <span>Items</span>
                            </div>
                            <div class="sub-total">
                                <span>Sub total</span>
                            </div>
                        </div>
                        <?php
                        $sub_total = 0;
                        $charges = 0;
                        $total = 0;

                        // echo "<pre>";print_r($_SESSION['cartdata']);die;

                        if (!empty($_SESSION['cartdata'])) {
                            foreach ($_SESSION['cartdata'] as $result) {
                                $sub_total += $result['total'];
                                $charges = $sub_total * 10 / 100;
                                $total = $sub_total + $charges;
                                ?>
                                <div class="cart-item">
                                    <div class="cart-image">
                                        <img src="<?php echo base_url(PRODUCT . $result['image']); ?>" width="15%">
                                    </div>
                                    <div class="cart-content">
                                        <div class="cart-title">
                                            <h4><?php echo $result['name']; ?> 150 ML</h4>
                                        </div>
                                    </div>
                                    <div class="total">
                                        <span>$<?= $result['price']; ?></span>
                                    </div>
                                    <div class="increment">
                                        <div class="input demon">
                                            <button class="minus" aria-label="Decrease by one" disabled>
                                                <img src="<?= base_url('public/frontend/images/icon/minus.svg'); ?>" alt="icon">
                                            </button> 
                                            <div class="number dim"><?php echo $result['quantity']; ?></div>
                                            <a href="<?= base_url('beauty/direct_cart/' . $result['id']); ?>" class="lite">+</a>
                                            <!-- <button class="plus">
                                                <img src="<?= base_url('public/frontend/images/icon/plus.svg'); ?>" alt="icon">
                                            </button> -->
                                        </div>
                                    </div>
                                    <div class="total">
                                        <span>$<?php echo $result['total']; ?></span>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            <div class="empty-cart">
                                <a href="<?php echo base_url('beauty/remove/' . $result['id']); ?>"><img src="<?= base_url('public/frontend/images/icon/empty.svg'); ?>" alt="icon"> Empty cart</a>
                            </div>
                        <?php
                        } else {
                            echo "No Recode found";
                        }
                        ?>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3 order-1 order-lg-2">
                    <?php
                    $userdata = $this->session->userdata('user'); 
                    if (!empty($userdata)){
                    ?> 
                    <form method="POST" action="<?= base_url('beauty/shipping') ?>">
                    <?php   
                    }else{
                        redirect('beauty/signin');
                    } 
                    ?> 
                        <div class="sidebar-widget" data-aos="fade-left">
                            <div class="widget">
                                <div class="widget-inner">
                                    <div class="widget-title">
                                        <h2>Order summery</h2>
                                    </div>
                                    <div class="widget-item">
                                        <div class="item">
                                            <span class="item-name">Subtotal</span>
                                            <span class="item-price">$ <?php echo $sub_total; ?></span>
                                        </div>
                                        <div class="item">
                                            <span class="item-name">Shipping</span>
                                            <span class="item-price">$ <?php echo $charges; ?></span>
                                        </div>
                                    </div>
                                    <div class="widget-total"> 
                                        <div class="item-total">
                                            <span class="total-name">Total:</span>
                                            <span class="total-price">$ <?php echo $total; ?></span>
                                        </div>
                                        <?php if (!empty($_SESSION['cartdata'])) { ?>
                                            <div class="theme-button">
                                                <button type="submit" name="submit_cart" value="submit_cart" class="submit">Proceed</button>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart page end -->
</div>
<!-- main wrapper end -->




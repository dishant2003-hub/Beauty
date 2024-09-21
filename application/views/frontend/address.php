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

    <!-- Shipping page start -->
    <section class="section-wrapper common-form shipping-page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 gojo" style="margin-top: 90px;">
                    <?php
                    if (isset($array)) { ?>
                        <h4>Hey <?php echo $array['fname']; ?> <?php echo $array['lname']; ?> </h4>
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
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 gojo" style="margin-top: 70px;">
                    <div class="default-form shipping-form" data-aos="fade-left">
                        <h2>Address</h2>

                        <form method="POST" class="form" action="<?= base_url('beauty/signup_data') ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 ">
                                    <div class="form-group">
                                        <h5>First Name</h5>
                                        <div class="vegita"><?php echo $array['fname']; ?></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <h5>Last Name</h5>
                                        <div class="vegita"><?php echo $array['lname']; ?> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 ">
                                    <div class="form-group">
                                        <h5>Address</h5>
                                        <div class="vegita"><?php echo $array['address']; ?></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <h5>Mobile</h5>
                                        <div class="vegita"><?php echo $array['phone']; ?> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 ">
                                    <div class="form-group">
                                        <h5>city</h5>
                                        <div class="vegita"><?php echo $array['city']; ?></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <h5>Zip code</h5>
                                        <div class="vegita"><?php echo $array['zipcode']; ?> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="theme-button">
                                <button type="submit" name="submit" value="submit" class="submit-btn addcart">Save</button>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shipping page end -->
</div>
<!-- main wrapper end -->
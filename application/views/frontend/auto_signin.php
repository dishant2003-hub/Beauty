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
                            <h2 class="glowIn">SITE NAME</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- Shipping page start -->
    <section class="section-wrapper common-form shipping-page">
        <div class="container" style="margin-top: 70px;">
            <div class="row">  
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 order-2 order-lg-1"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-2 order-lg-1">
                    <div class="default-form shipping-form" data-aos="fade-right">
                        <h2>Sign-in</h2>

                        <form method="POST" class="form" action="<?= base_url('beauty/signin_data'); ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <input type="email" name="Email" class="user-input" placeholder="E-mail" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <input type="password" name="Password" class="user-input" placeholder="Password" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="theme-button">
                                <button type="submit" name="submit" value="submit" class="submit-btn addcart">Sign in</button>
                            </div>
                            <div class="theme-button" style="text-align: center; margin-top: 20px;">
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 order-2 order-lg-1"></div>
            </div>
        </div>
    </section>
    <!-- Shipping page end -->
</div>
<!-- main wrapper end -->
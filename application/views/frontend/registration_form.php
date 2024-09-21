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
                <div class="col-12 col-sm-12 col-md-12 col-lg-2 order-2 order-lg-1"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 order-2 order-lg-1">
                    <div class="default-form shipping-form" data-aos="fade-left">
                        <h2 style="font-size: px;">registration-form</h2>

                        <form method="POST" class="form" action="<?= base_url('beauty/register') ?>" enctype="multipart/form-data">
                            <div class="row">   
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="Firstname" class="user-input" placeholder="First name" required="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="Lastname" class="user-input" placeholder="Last name" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <input type="email" name="Email" class="user-input" placeholder="E-mail" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="Dob" class="user-input" placeholder="D-O-B" required="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="Mobile" class="user-input" placeholder="Mobile" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="password" name="Password" class="user-input" placeholder="Password" required="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="Gender" class="user-input" placeholder="Gender" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="Address" class="user-input" placeholder="Address" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="Zipcode" class="user-input" placeholder="Zipcode" required="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="City" class="user-input" placeholder="City" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="theme-button">
                                <button type="submit" name="submit" value="submit" class="submit-btn addcart">register</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-2 order-2 order-lg-1"></div>
            </div>
        </div>
    </section>
    <!-- Shipping page end -->
</div>
<!-- main wrapper end -->
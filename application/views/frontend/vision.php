<style>
    .section-wrapper {
        padding: 0px 0;
    }
    .newsletter-section{
        padding: 65px 0;
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
                            <h2 class="glowIn">Our vision</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- About us section start -->
    <section class="section-wrapper aboutus-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 70px;">
                    <div class="about-desc" data-aos="fade-down">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque in mattis amet, suspendisse habitasse. Quis quam sociis nunc, tristique adipiscing.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                    <div class="about-img" data-aos="fade-right">
                        <img src="<?= base_url('public/frontend/images/thumbnail/aboutus.png'); ?>" alt="about">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                    <div class="section-title" data-aos="fade-left">
                        <h2 class="">About us</h2>
                        <img src="<?= base_url('public/frontend/images/icon/newsletter.svg'); ?>" alt="icon">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque in mattis amet, suspendisse habitasse. Quis quam sociis nunc, tristique adipiscing.</p>
                        <p>Blandit egestas quam purus commodo mi urna pharetra. Sodales a potenti dictumst nis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque in mattis amet, suspendisse habitasse. Quis quam sociis nunc, tristique adipiscing.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque in mattis amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About us section end -->
    <!-- Journey section start -->
    <section class="section-wrapper journey-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-title" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="">Our journey</h2>
                        <img src="<?= base_url('public/frontend/images/icon/newsletter.svg'); ?>" alt="icon">
                    </div>
                    <div class="counter">
                        <div class="counter-item" data-aos="fade-up" data-aos-duration="1500">
                            <p class="average"><span class="count">53k</span></p>
                            <p class="qualification">Happy clients</p>
                        </div>
                        <div class="counter-item" data-aos="fade-up" data-aos-duration="1600">
                            <p class="average"><span class="count">126k</span></p>
                            <p class="qualification">Successful delivery</p>
                        </div>
                        <div class="counter-item" data-aos="fade-up" data-aos-duration="1700">
                            <p class="average"><span class="count">100%</span></p>
                            <p class="qualification">Satisfaction</p>
                        </div>
                        <div class="counter-item" data-aos="fade-up" data-aos-duration="1800">
                            <p class="average"><span class="count">80</span></p>
                            <p class="qualification">Contries reach</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Journey section end -->
    <!-- Newsletter section start -->
    <section class="section-wrapper newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="cancel-sub" data-aos="fade-up">
                        <div class="section-title">
                            <h2 class="">Join our newsletter</h2>
                            <img src="<?= base_url('public/frontend/images/icon/newsletter.svg'); ?>" alt="icon">
                        </div>
                        <div class="newsletter-form">
                            <form method="POST" class="form">
                                <div class="form-group">
                                    <input type="email" name="email" class="user-input" placeholder="Enter E-mail" required="">
                                    <div class="theme-button">
                                        <button type="submit" class="submit-btn">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter section end -->
</div>
<!-- main wrapper end -->
<!-- Once time model open start -->
<div id="myModal" class="modal fade modeltime" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close modeltimeclose" data-dismiss="modal"><img src="<?= base_url('public/frontend/images/icon/close.svg'); ?>" alt="close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="model-wrapper">
                            <div class="model-description">
                                <img src="<?= base_url('public/frontend/images/icon/logo.svg'); ?>" alt="logo">
                                <h2>Welcome</h2>
                                <p>Hendrerit amet tortor vulputate erat vitae accumsan. Sed augue iaculis ullamcorper enim mauris. Quis varius id tristique euismod. Sem egestas mauris id amet hac lacinia nisi morbi nibh. Ipsum elementum pulvinar vestibulum convallis nec hendrerit fames mollis</p>
                                <p>Agree that you have read our <a href="terms-services.html">Terms & condition</a>, <a href="privacy-policy.html">Privacy policy</a> & <a href="cookie-policy.html">Cookie policy</a> by pressing continue</p>
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
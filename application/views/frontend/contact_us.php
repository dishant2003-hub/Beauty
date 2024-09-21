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
                            <h2 class="glowIn">Contact us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- contact page start -->
    <section class="section-wrapper common-form contact-page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6" style="margin-top: 70px;">
                    <div class="default-form contact-form" data-aos="fade-right">
                        <h2>Fill in your information</h2>
                        <form method="POST" action="<?= base_url('beauty/contact_form') ?>">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="firstname" class="user-input" placeholder="First name" required="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="lastname" class="user-input" placeholder="Last name" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="user-input" placeholder="E-mail" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="user-input" placeholder="Telephone" required="">
                                    </div>
                                </div>
                            </div>    
                            <div class="row">    
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="user-input" placeholder="Subject" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" class="user-input" placeholder="Description" required=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-button">
                                <button type="submit" name="submit" value="submit">Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6" style="margin-top: 70px;">
                    <div class="form-content contact-content" data-aos="fade-left">
                        <ul>
                            <li>
                                <div class="icon">E-mail :</div>
                                <a href="mailto:email@((SITE_NAME))">email@((SITE_NAME))</a>
                            </li>
                            <li>
                                <div class="icon">Address :</div>
                                <p>F1 - Address road, St. Jhon, Denmark 000900</p>
                            </li>
                            <li>
                                <div class="icon">Phone :</div>
                                <a href="tel:741225639666">7412 - 2563 - 9666</a>
                            </li>
                        </ul>
                        <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque in mattis amet,</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact page end -->
</div>
<!-- main wrapper end -->
<!-- Once time model open start -->
<div id="myModal" class="modal fade modeltime" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close modeltimeclose" data-dismiss="modal"><img src="<?= base_url('upload/frontend/images/icon/close.svg'); ?>" alt="close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="model-wrapper">
                            <div class="model-description">
                                <img src="<?= base_url('upload/frontend/images/icon/logo.svg'); ?>" alt="logo">
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
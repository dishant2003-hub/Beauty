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
                            <h2 class="glowIn">Support</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- FAQ section start -->
    <section class="section-wrapper faq-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 70px;">
                    <div class="section-title" data-aos="fade-up">
                        <h2>FAQ’S</h2>
                    </div>

                    <?php
                        //  echo "<pre>";print_r($result);die;
                        foreach($result as $key => $data){
                    ?>
                    <div class="cus-accordion" id="accordionExample" data-aos="fade-up">
                        <div class="custom-collapse">
                            <div class="card-header" id="heading1">
                                <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapse<?=$key?>" aria-expanded="false" aria-controls="collapse1" data-parent="#accordionExample">
                                    <span><?= $data['id']; ?>.</span> <?= $data['heading'];  ?>
                                    <span class="coll-sing"></span>
                                </h4>
                            </div>
                            <div id="collapse<?=$key?>" class="collapse" aria-labelledby="heading" data-parent="#accordionExample">
                                <div class="card-body">
                                    <?=  $data['description']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
    </section>
    <!-- FAQ section end -->
</div>
<!-- main wrapper end -->
<!-- Once time model open start -->
<div id="myModal" class="modal fade modeltime" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close modeltimeclose" data-dismiss="modal"><img src="assets/images/icon/close.svg" alt="close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="model-wrapper">
                            <div class="model-description">
                                <img src="assets/images/icon/logo.svg" alt="logo">
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
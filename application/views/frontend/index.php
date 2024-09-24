<!-- main wrapper start -->
<div class="main-wrapper" id="main-wrapper">
   <!-- Explorer section start -->
   <!-- <section class="section-wrapper banner" id="banner">
      <div class="container">
         <div class="row align-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
               <div class="section-title" data-aos="fade-right">
                  <span class="tag">Total Skin care</span>
                  <h2 class="">Luxury Beauty Experience</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.</p>
                  <div class="theme-button">
                     <a href="<?= base_url('beauty/signin') ?>" class="submit-btn">Explore now</a>
                  </div>
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
               <div class="banner-img" data-aos="fade-left">
                  <img src="<?= FRONTEND_ASSETS_PATH; ?>images/thumbnail/banner.png" alt="banner">
               </div>
            </div>
         </div>
      </div>
   </section>  -->
   <!-- Explorer section end -->


   <div class="container-fauit">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <section class="section-wrapper banner" id="banner">
               <div class="container">
                  <div class="row align-center">
                     <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="section-title" data-aos="fade-right">
                           <span class="tag">Total Skin care</span>
                           <h2 class="">Luxury Beauty Experience</h2>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.</p>
                           <div class="theme-button">
                              <a href="<?= base_url('beauty/signin') ?>" class="submit-btn">Explore now</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="banner-img" data-aos="fade-left">
                           <img src="<?= FRONTEND_ASSETS_PATH; ?>images/thumbnail/banner.png" alt="banner">
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            
         </div>
         <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="width: 5%;">
            <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#myCarousel" data-slide="next" style="width: 5%;">
            <span class="sr-only">Next</span>
         </a>
      </div>
   </div> 

   <!-- category section start -->
   <section class="section-wrapper product-slider">
      <div class="container">
         <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
               <div class="section-title">
                  <h2 class="">Categories</h2>
                  <img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/newsletter.svg" alt="icon">
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
               <div class="re-product">
                  <?php
                  foreach ($datares as $row) {
                  ?>
                     <div class="slide">
                        <div class="product-item">
                           <div class="product-image">
                              <span class="sale">Save 58%</span>
                              <a href="<?= base_url('beauty/product/' . $row['id']); ?>" class="card-images"> <img src="<?php echo base_url(UPLOAD . $row['image']); ?>" alt="img"></a>
                              <a href="#" class="whislist"><img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/whishlist.svg" alt="icon"></a>
                           </div>
                           <div class="product-content">
                              <h5><a href="<?= base_url('beauty/product/' . $row['id']) ?>"><?php echo ($row['name']) ?></a></h5>
                              <span class="price">$<?php echo ($row['price']) ?>.00<span class="previous-price">$ 152</span></span>
                              <a href="<?= base_url('beauty/direct_cart/' . $row['id']) ?>" class="cart"><img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/cart.svg" alt="icon"></a>
                           </div>
                        </div>
                     </div>
                  <?php
                  }
                  ?>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- category section end -->

   <!-- Product section start -->
   <section class="section-wrapper product-slider">
      <div class="container">
         <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
               <div class="section-title">
                  <h2 class="">Recommended Products</h2>
                  <img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/newsletter.svg" alt="icon">
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
               <div class="re-product">
                  <?php
                  foreach ($get_all_category as $data) {
                  ?>
                     <div class="slide">
                        <div class="product-item">
                           <div class="product-image">
                              <span class="sale">Save 58%</span>
                              <a href="<?= base_url('beauty/product/' . $data['id']); ?>" class="card-images"> <img src="<?php echo base_url(UPLOAD . $data['image']); ?>" alt="img"></a>
                              <a href="#" class="whislist"><img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/whishlist.svg" alt="icon"></a>
                           </div>
                           <div class="product-content">
                              <h5><a href="<?= base_url('beauty/product/' . $data['id']) ?>"><?php echo ($data['name']) ?></a></h5>
                              <span class="price">$<?php echo ($data['price']) ?>.00<span class="previous-price">$ 152</span></span>
                              <a href="<?= base_url('beauty/direct_cart/' . $data['id']) ?>" class="cart"><img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/cart.svg" alt="icon"></a>
                           </div>
                        </div>
                     </div>
                  <?php
                  }
                  ?>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Product section end -->

   <!-- Explorer section start -->
   <section class="section-wrapper explorer" id="explorer">
      <div class="container">
         <div class="row align-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
               <div class="section-title">
                  <h2 class="">Give your skin the perfect care</h2>
                  <div class="theme-button">
                     <a href="<?= base_url('beauty/signin'); ?>" class="submit-btn">Explore now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Explorer section end -->

   <!-- Selling section start -->
   <section class="section-wrapper product-slider">
      <div class="container">
         <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
               <div class="section-title">
                  <h2 class="">Best Selling Product</h2>
                  <img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/newsletter.svg" alt="icon">
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
               <div class="re-product">
                  <?php
                  foreach ($get_all_category as $data) {
                  ?>
                     <div class="slide">
                        <div class="product-item">
                           <div class="product-image">
                              <span class="sale">Save 60%</span>
                              <a href="<?= base_url('beauty/product/' . $data['id']) ?>" class="card-images"><img src="<?php echo base_url(UPLOAD . $data['image']); ?>" alt="product-image"></a>
                              <a href="#" class="whislist"><img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/whishlist.svg" alt="icon"></a>
                           </div>
                           <div class="product-content">
                              <h5><a href="<?= base_url('beauty/product/' . $data['id']) ?>"><?php echo ($data['name']) ?></a></h5>
                              <span class="price">$<?php echo ($data['price']) ?>.00<span class="previous-price">$ 152</span></span>
                              <a href="<?= base_url('beauty/direct_cart/' . $data['id']) ?>" class="cart"><img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/cart.svg" alt="icon"></a>
                           </div>
                        </div>
                     </div>
                  <?php
                  }
                  ?>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Selling section end -->

   <!-- About us section start -->
   <section class="section-wrapper aboutus-section aboutus" id="about">
      <div class="container">
         <div class="row align-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
               <div class="about-img">
                  <img src="<?= FRONTEND_ASSETS_PATH; ?>images/thumbnail/about.png" alt="about">
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5">
               <div class="section-title">
                  <h2 class="">About us</h2>
                  <img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/newsletter.svg" alt="icon">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque in mattis amet, suspendisse habitasse. Quis quam sociis nunc, tristique adipiscing.</p>
                  <p>Blandit egestas quam purus commodo mi urna pharetra. Sodales a potenti dictumst nis.</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- About us section end -->

   <!-- Journey section start -->
   <section class="section-wrapper journey-section provide">
      <div class="container">
         <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
               <div class="section-title">
                  <h2 class="">We provide</h2>
                  <img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/newsletter.svg" alt="icon">
               </div>
               <div class="counter">
                  <div class="counter-item">
                     <p class="average"><span class=""><img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/delivery.svg" alt="icon"></span></p>
                     <p class="qualification">Fast delivery</p>
                     <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                  <div class="counter-item">
                     <p class="average"><span class=""><img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/support.svg" alt="icon"></span></p>
                     <p class="qualification">24/7 support</p>
                     <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                  <div class="counter-item">
                     <p class="average"><span class=""><img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/returning.svg" alt="icon"></span></p>
                     <p class="qualification">Easy return</p>
                     <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                  <div class="counter-item">
                     <p class="average"><span class=""><img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/safe-payment.svg" alt="icon"></span></p>
                     <p class="qualification">Safe payment</p>
                     <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Journey section end -->

   <!-- Newsletter section start -->
   <section class="section-wrapper newsletter-section newsletter">
      <div class="container">
         <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
               <div class="cancel-sub">
                  <div class="section-title">
                     <h2 class="">Join our newsletter</h2>
                     <img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/newsletter.svg" alt="icon">
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
<!-- main wrapper start -->
<div class="main-wrapper" id="main-wrapper">
   <!-- breadcrumb start -->
   <section class="section-wrapper breadcrumb-wrapper" id="breadcrumb-wrapper">
      <div class="sqaure">
         <div class="container">
            <div class="row">
               <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="breadcrumb-block">
                     <h2 class="glowIn">Shipping</h2>
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
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 order-2 order-lg-1">
               <div class="default-form shipping-form" data-aos="fade-right">
                  <h2>Fill in your information</h2>

                  <form method="POST" class="form" action="<?= base_url('beauty/shopdata') ?>" enctype="multipart/form-data">
                     
                     <div class="mb-3">
                        <input type="hidden" class="id" name="id">
                     </div>

                     <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                           <div class="form-group">
                              <input type="text" name="Name" class="user-input" placeholder="Name"  required="">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                           <div class="form-group">
                              <input type="email" name="Email" class="user-input" placeholder="E-mail"required="">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                           <div class="form-group">
                              <input type="text" name="Phone" class="user-input" placeholder="Telephone"  required="">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                           <div class="form-group">
                              <input type="text" name="Address" class="user-input" placeholder="Address"required="">
                           </div>
                        </div> 
                     </div>
                     <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                           <div class="form-group">
                              <input type="text" name="City" class="user-input" placeholder="City" required="">
                           </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                           <div class="form-group">
                              <input type="text" name="Zipcode" class="user-input" placeholder="Zipcode" required="">
                           </div>
                        </div>
                     </div>

                     <?php
                     $sub_total = 0;

                     foreach ($_SESSION['cartdata'] as $result) {
                        
                        $sub_total += $result['total'];
                        $charges = $sub_total * 10 / 100;
                        $total = $sub_total + $charges;
                     }
                     ?>

                     <div class="remember">
                        <label class="custom-check-box">I am over 18 years old and accept the <a href="#">condition</a> When signed up for the campaign you will receive 3 days trial which costs 1.00 USD. If your membership is not cancelled within the trial, we will charge you 39.95 USD every 14 days, until the membership is terminated<input type="checkbox" name="terms" id="terms" required=""><span class="checkmark"></span></label>
                     </div>
                     <div class="theme-button">
                        <button type="submit" name="submit" value="submit" class="submit-btn addcart">Checkout</button>
                     </div>
                  </form>
               </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-4 order-1 order-lg-2">
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
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Shipping page end -->
</div>
<!-- main wrapper end -->
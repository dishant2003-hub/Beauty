<!-- main wrapper start -->
<div class="main-wrapper" id="main-wrapper">
   <!-- breadcrumb start -->
   <section class="section-wrapper breadcrumb-wrapper" id="breadcrumb-wrapper">
      <div class="sqaure">
         <div class="container">
            <div class="row">
               <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="breadcrumb-block">
                     <h2 class="glowIn">Product</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb end -->
   
   <!-- Product page start -->
   <section class="section-wrapper product-page">
      <div class="container">                                     
         <form method="POST" id="upload_form" action="<?= base_url('beauty/cart') ?>" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $datares['id'] ?>">
            <div class="row">  
               <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-5">
                  <div class="product-image">
                     <div id="slider" class="owl-carousel product-slider">
                        <div class="item">
                        <input type="hidden" name="image" value="<?php echo $datares['image'] ?>">
                           <img src="<?php echo base_url(UPLOAD . $datares['image']); ?>" alt="image">
                        </div>
                     </div>
                     <div id="thumb" class="owl-carousel product-thumb">
                        <div class="item">
                           <img src="<?php echo base_url(UPLOAD . $datares['image']); ?>" alt="image">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-7">
                  <div class="product-desc">
                     <div class="product-title">
                        <span class="tag">Perfume</span>
                        <h3><?php echo $datares['name'] ?></h3>
                        <input type="hidden" name="name" value="<?php echo $datares['name'] ?>">
                     </div>

                     <div class="price">
                        <div class="item-price">
                           <span class="not-price">$ 155</span>
                           <span class="total-price">$<?php echo $datares['price'] ?></span>
                           <input type="hidden" name="price" value="<?php echo $datares['price'] ?>">  
                        </div>
                     </div>
                     <div class="increment">
                        <div class="input">
                           <button class="minus incre" aria-label="Decrease by one" disabled>
                              <img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/minus.svg" alt="icon">
                           </button>
                           <div class="number dim" >1</div>
                           <button class="plus incre" aria-label="Increase by one">
                              <img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/plus.svg" alt="icon">
                           </button>
                        </div>
                     </div>
                     <div class="theme-button">
                        <button type="submit" name="submit" value="submit" class="submit-btn addcart">Add to cart</button>
                        <a href="#" class="whislist"><img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/whishlist.svg" alt="icon">Add to wishlist</a>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </section>
   <!-- Product page end -->

   <!-- information section start -->
   <section class="section-wrapper information">
      <div class="container">
         <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
               <div class="details">
                  <table id="information">
                     <thead>
                        <tr>
                           <th colspan="2">Additonal Information</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Color :</td>
                           <td>Lavander</td>
                        </tr>
                        <tr>
                           <td>Brand :</td>
                           <td>Avantgarde, Porto, Ron Jones</td>
                        </tr>
                        <tr>
                           <td>Gender :</td>
                           <td>Male, Female</td>
                        </tr>
                        <tr>
                           <td>Weight :</td>
                           <td>150 g</td>
                        </tr>
                        <tr>
                           <td>Dimensions :</td>
                           <td>50 x 50 x 115 cm</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- information section end -->
   <!-- Product section start -->
   <section class="section-wrapper product-slider">
      <div class="container">  
         <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
               <div class="section-title">
                  <h2 class="">Discover more like this</h2>
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
                              <a href="<?= base_url('beauty/product/' . $data['id']) ?>" class="card-images"> <img src="<?php echo base_url(UPLOAD . $data['image']); ?>" alt="img"></a>
                              <a href="#" class="whislist"><img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/whishlist.svg" alt="icon"></a>
                           </div>
                           <div class="product-content">
                              <h5><a href="<?= base_url('beauty/product/' . $data['id']) ?>"><?php echo ($data['name']) ?></a></h5>
                              <span class="price">$<?php echo ($data['price']) ?>.00<span class="previous-price">$ 152</span></span>
                              <a href="<?= base_url('beauty/cart/' . $data['id']) ?>" class="cart"><img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/cart.svg" alt="icon"></a>
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
</div>
<!-- main wrapper end -->

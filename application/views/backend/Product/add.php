<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Category</h5></small>
                </div>
                <div class="card-body">
                    <form method="POST" id="upload_form" action="<?= base_url('backend/product/add_insert') ?>" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="hidden" value="<?= isset($result['id']) ? $result['id'] : ''; ?>" class="id" name="id">
                        </div>
                        <?php
                        if (!empty($result['id'])) {
                            $img_id = $result['id'];
                            $get_product_img = $this->select->image_add('product_img', array('product_id' => $img_id));
                        }
                        ?>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect" class="form-label">Category</label>
                            <select class="form-select menu_change " name="Category" aria-label="Default select example">
                                <option>select Menu</option>
                                <?php
                                foreach ($datares as $data) {
                                ?>
                                    <option value="<?= isset($data['id']) ? $data['id'] : ''; ?>">
                                        <?= isset($data['productname']) ? $data['productname'] : ''; ?>
                                    </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlSelect" class="form-label">Sub Category</label>
                            <select class="form-select" name="Subcategory" aria-label="Default select example" id="category_change">
                                <option selected>select Menu</option>

                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="Pname" placeholder="Product" value="<?= isset($result['productname']) ? $result['productname'] : ''; ?>" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Product Price</label>
                            <input type="text" class="form-control" name="Productprice" placeholder="Price" value="<?= isset($result['price']) ? $result['price'] : ''; ?>" />
                        </div>

                        <div class="mb-3"> 
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="Description"> <?= isset($result['description']) ? $result['description'] : ''; ?></textarea>
                        </div>
 
                        <div class="mb-3">
                            <label class="form-label">Profile Picture</label>
                            <input type="file" class="form-control" name="images[]" id="mul_images" multiple />
                            <div class="row ">
                                <?php
                                if (isset($get_product_img)) {
                                    foreach ($get_product_img as $data) {
                                ?>
                                        <div class="col-sm-3">
                                            <img src="<?= isset($result['image']) ? base_url('upload/product/' . $data['image']) : ''; ?>" id="images" alt="image">
                                            <a href="javascript:void(0);" data-img-id="<?php echo ($data['id']) ?>" class="btn btn-danger btn-sm delete_img"><i class="fa fa-trash"></i></a>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                </div>
                <div class="img-thumbs img-thumbs-hidden" id="img-preview"></div>
                <input type="submit" name="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
</div>



<script>
    // ------ form ma mltiple image show ------- 
    var imgUpload = document.getElementById('mul_images'),
        imgPreview = document.getElementById('img-preview'),
        imgUploadForm = document.getElementById('form-upload'),
        totalFiles, previewTitle, previewTitleText, img;

    imgUpload.addEventListener('change', previewImgs, true);

    function previewImgs(event) {
        totalFiles = imgUpload.files.length;

        if (!!totalFiles) {
            imgPreview.classList.remove('img-thumbs-hidden');
        }

        for (var i = 0; i < totalFiles; i++) {
            wrapper = document.createElement('div');
            wrapper.classList.add('wrapper-thumb');
            removeBtn = document.createElement("span");
            nodeRemove = document.createTextNode('x');
            removeBtn.classList.add('remove-btn');
            removeBtn.appendChild(nodeRemove);
            img = document.createElement('img');
            img.src = URL.createObjectURL(event.target.files[i]);
            img.classList.add('img-preview-thumb');
            wrapper.appendChild(img);
            wrapper.appendChild(removeBtn);
            imgPreview.appendChild(wrapper);

            $('.remove-btn').click(function() {
                $(this).parent('.wrapper-thumb').remove();
            });
        }
    }


    // =----- Category and Sub_Category----------

    $(document).ready(function() {
        $('.menu_change').change(function() {
            var id = $(this).val();

            $.ajax({
                type: "POST",
                url: "<?= base_url("backend/product/sub_menu_change") ?>",
                data: {
                    id: id,
                },
                success: function(data) {
                    var obj = JSON.parse(data);
                    console.log(obj);
                    var html = "";
                    obj.forEach(function myFunction(item, index, arr) {
                        html += '<option value="' + item.id + '">' + item.productname + '</option>';
                    });
                    $('#category_change').html(html);
                }
            });
        });

        // ---------- Image Delete ----------------

        $('.delete_img').click(function() {
            var id = $(this).attr('data-img-id');

            $.ajax({
                type: "POST",
                url: "<?= base_url("backend/product/deleteimage") ?>",
                data: {
                    id: id,
                },
                success: function(data) {
                    location.reload();
                }
            });

        });


    });
</script>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Category</h5></small>
                </div>
                <div class="card-body">

                    <form method="POST" action="<?= base_url('beauty/cart') ?>" enctype="multipart/form-data">

                        <div class="mb-3">
                            <input type="hidden" value="" class="id" name="product_id">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="Name" placeholder="Product" value="" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Profile Picture</label>
                            <input type="file" class="form-control" name="image" multiple />
                            <img src="<?= isset($result['image']) ? base_url('upload/image/' . $result['image']) : ''; ?>" alt="">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Product Price</label>
                            <input type="text" class="form-control" name="Productprice" placeholder="Price" value="" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Quantity</label>
                            <input type="text" class="form-control" name="Quantity" placeholder="Quantity" value="" />
                        </div>

                        <input type="submit" name="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
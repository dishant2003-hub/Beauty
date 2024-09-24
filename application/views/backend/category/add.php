<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Category</h5></small>
                </div>
                <div class="card-body">

                    <form method="POST" action="<?= base_url('backend/category/add_insert') ?>" enctype="multipart/form-data">

                        <div class="mb-3">
                            <input type="hidden" value="<?= isset($result['id']) ? $result['id'] : ''; ?>" class="id" name="id">
                        </div>
   
                        <div class="mb-3">
                            <label for="exampleFormControlSelect" class="form-label">Parent </label>
                            <select class="form-select " name="parent" id="exampleFormControlSelect1" aria-label="Default select example">
                                <option selected>select Menu</option>
                                <?php
                                foreach ($datares as $data) {   
                                ?>
                                    <option value="<?= isset($data['id']) ? $data['id'] : ''; ?>"><?= isset($data['name']) ? $data['name'] : ''; ?></option>
                                <?php
                                }
                                ?>
                                
                            </select>  
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Name</label> 
                            <input type="text" class="form-control" name="name" placeholder="Product" value="<?= isset($result['name']) ? $result['name'] : ''; ?>" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Profile Picture</label>
                            <input type="file" class="form-control" name="image" multiple/>
                            <img src="<?= isset($result['image']) ? base_url('upload/image/' . $result['image']) : ''; ?>" alt="">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Product Price</label>
                            <input type="text" class="form-control" name="Productprice" placeholder="Price" value="<?= isset($result['price']) ? $result['price'] : ''; ?>" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="description"> <?= isset($result['description']) ? $result['description'] : ''; ?></textarea>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>   
        </div> 
    </div>
</div>
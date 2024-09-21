<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Support</h5></small>
                </div>
                <div class="card-body">

                    <form method="POST" action="<?= base_url('backend/support/support_insert') ?>" enctype="multipart/form-data">
      <?php  
        // echo "<pre>";print_r($result);die; 
      ?>

                        <input type="hidden" value="<?= isset($result['id']) ? $result['id'] : ''; ?>" class="id" name="id">

                        <div class="mb-3">
                            <label class="form-label">Heading</label>
                            <input type="text" class="form-control" name="name" value="<?= isset($result['heading']) ? $result['heading'] : ''; ?>" />
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



<!-- Bordered Table -->

<div class="container">
    <div class="card">
        <h5 class="card-header">Product</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category</th>
                            <th>Sub-Category</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Description</th>
                            <th>Picture</th> 
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php foreach ($student as $data) { 
                        ?>
                            <tr>
                                <td><?= $data->id; ?></td>
                                <td><?= $data->category; ?></td> 
                                <td><?= $data->subcategory; ?></td>  
                                <td><?= $data->productname; ?></td>
                                <td><?= $data->price; ?></td>
                                <td><?= $data->description; ?></td>
                                <td>
                                    <?php
                                    if ($data->pi_image) {
                                    ?>
                                        <img src="<?php echo base_url(PRODUCT . $data->pi_image); ?>" width="16%">
                                    <?php
                                    } else {
                                        $data->image;
                                    ?>
                                        <img src="<?php echo base_url(PRODUCT . $data->image); ?>" width="16%">
                                    <?php
                                    }
                                    ?>
                                <td>
                                    <label class="switch">
                                        <input type="checkbox" value="<?= $data->is_active ?>" data-id="<?= $data->id ?>" class="switch-input update-status" <?= $data->is_active == 1 ? 'checked' : '' ?>>
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on">
                                                <i class="bx bx-check"></i>
                                            </span>
                                            <span class="switch-off">
                                                <i class="bx bx-x"></i>
                                            </span>
                                        </span>
                                    </label>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('backend/product/update/' . $data->id); ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="<?php echo base_url('backend/product/delete/' . $data->id); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <nav class="pagination" style="margin-top: 30px;" data-aos="fade-up">
                    <ul>
                        <div id="pagination">
                            <ul class="tsc_pagination">
                                <li>
                                    <?php echo $links; ?>
                                </li>
                            </ul>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--/ Bordered Table -->

<script>
    $(document).ready(function() {
        $('.update-status').change(function() {
            var id = $(this).attr('data-id');
            var status = $(this).val();
            var status = 0;
            var record_id = $(this).val();
            if (this.checked) {
                status = 1;
            }
            $.ajax({
                type: "POST",
                url: "<?= base_url("backend/product/update_cat_status") ?>",
                data: {
                    id: id,
                    status: status,
                },
                success: function(data) {
                }
            });
        });
    });
</script>
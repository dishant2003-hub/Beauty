<!-- Hoverable Table rows -->

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">Category Table</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Parent</th>
                        <th>Name</th>
                        <th>Picture</th>
                        <th>Product Price</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr> 
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php
                    foreach ($student as $data) {
                    ?>
                        <tr>
                            <td><?= $data->id; ?></td>
                            <td><?= $data->parent_name; ?></td>
                            <td><?= $data->name; ?></td>
                            <td><img src="<?php echo base_url(UPLOAD  . $data->image); ?>" width="25%"></td>
                            <td>$<?= $data->price; ?></td>
                            <td><?= $data->description; ?></td>
                            <td>
                                <label class="switch">
                                    <input type="button" value="<?= $data->is_active ?>" data-id="<?= $data->id; ?>" class="switch-input update-status" <?= $data->is_active == 1 ? 'checked' : '' ?>>
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
                                <a href="<?php echo base_url('backend/category/update/' . $data->id); ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?php echo base_url('backend/category/delete/' . $data->id); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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


<!--/ Hoverable Table rows -->

<script>
    $(document).ready(function() {
        $('.update-status').change(function() {
            // alert('test');
            var id = $(this).attr('data-id');
            var status = $(this).val();
            var status = 0;
            var record_id = $(this).val();
            if (this.checked) {
                status = 1;
            }
            $.ajax({
                type: "POST",
                url: "<?= base_url("backend/category/update_cat_status") ?>",
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
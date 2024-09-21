<!-- Hoverable Table rows -->

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">Support Table</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Parent</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <?php
                        // echo "<pre>";print_r($student);die;    
                        foreach ($student as $data) {
                        ?>

                            <td><?= $data->id; ?></td>
                            <td><?= $data->heading; ?></td>
                            <td><?= $data->description; ?></td>
                            <td>
                                <a href="<?php echo base_url('backend/support/update/' . $data->id); ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?php echo base_url('backend/support/delete/' . $data->id); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                    </tr>
                <?php
                        }
                ?>
                </tr>
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
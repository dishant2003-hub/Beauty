<!-- Hoverable Table rows -->

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">Support Table</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fname</th>
                        <th>Lname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Subject</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <?php
                        // echo "<pre>";print_r($student);die;
                        foreach ($student as $data) {
                        ?>
                            <td><?= $data->id; ?></td>
                            <td><?= $data->fname; ?></td>
                            <td><?= $data->lname; ?></td>
                            <td><?= $data->email; ?></td>
                            <td><?= $data->phone; ?></td>
                            <td><?= $data->subject; ?></td>
                            <td><?= $data->description; ?></td>
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
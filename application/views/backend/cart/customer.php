<!-- Bordered Table -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">Order Details :</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Total</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Zipcode</th>
                            <th>Status</th>
                        </tr>

                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <?php
                            foreach ($student as $data) {
                                $grand_total = 0;

                                $id = $data->id; 
                                $product = $this->cartdata->getAll('order_item', array('order_id' => $id));
                                foreach ($product as $arrow) {
                                    $grand_total += $arrow['total'];
                                    $charge = $grand_total * 10 / 100;
                                    $total = $grand_total + $charge;
                                }
                            ?>
                        <tr>
                            <td><?= $data->id ?></td>
                            <td><?= $data->name ?></td>
                            <td><?= $data->email ?></td>
                            <td>$<?php echo $total ?></td>
                            <td><?= $data->phone ?></td>
                            <td><?= $data->address ?></td>
                            <td><?= $data->city ?></td>
                            <td><?= $data->zipcode ?></td>
                            <td>
                                <a href="<?php echo base_url('backend/cart/customer_order/' . $data->id); ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-cart-shopping"></i></i></a>
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
</div>
<!--/ Bordered Table -->
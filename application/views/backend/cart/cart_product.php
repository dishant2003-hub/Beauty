<style>
    .button_back{
        color: white;
        padding: 10px 50px;
    }
</style>

<div class="col-12 col-sm-12 col-md-12 col-lg-12 gojo">
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row invoice-preview">
                <!-- Invoice -->
                <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
                    <div class="card invoice-preview-card">
                        <?php
                        foreach ($arrow as $obj) {
                        }
                        ?>
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column p-sm-3 p-0">
                                <div class="mb-xl-0 mb-4">
                                    <div class="d-flex svg-illustration mb-3 gap-2">
                                        <svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>icon</title>
                                            <defs>
                                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                                                    <stop stop-color="#5A8DEE" offset="0%"></stop>
                                                    <stop stop-color="#699AF9" offset="100%"></stop>
                                                </linearGradient>
                                                <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-2">
                                                    <stop stop-color="#FDAC41" offset="0%"></stop>
                                                    <stop stop-color="#E38100" offset="100%"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
                                                    <g id="Login" transform="translate(519.000000, 244.000000)">
                                                        <g id="Logo" transform="translate(148.000000, 42.000000)">
                                                            <g id="icon" transform="translate(0.000000, 4.000000)">
                                                                <path d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z" id="Combined-Shape" fill="#4880EA"></path>
                                                                <path d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z" id="Combined-Shape2" fill="url(#linearGradient-1)"></path>
                                                                <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0" width="7.68181818" height="7.68181818"></rect>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="app-brand-text h3 mb-0 fw-bold">Frest</span>
                                    </div>
                                    <div class="address">
                                        <p class="mb-1"><?= $obj['address']  ?></p>
                                        <p class="mb-1"><?= $obj['city']  ?> <?= $obj['zipcode']  ?></p>
                                        <p class="mb-0"><?= $obj['phone']  ?></p>
                                    </div>
                                </div>
                                <div>
                                    <h4>Invoice #3492</h4>
                                    <div class="date">
                                        <span class="me-1">Date :</span>
                                        <span class="fw-semibold">11/04/2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table border-top m-0">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Image</th>
                                        <th>Cost</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                        $sub_total = 0;
                                        foreach ($order as $product) {
                                            $sub_total += $product['total'];
                                            $charges = $sub_total * 10 / 100;
                                            $total = $sub_total + $charges;
                                        ?>
                                            <td><?= $product['name'] ?></td>
                                            <td><img src="<?php echo base_url(UPLOAD . $product['image']); ?>" width="15%"></td>
                                            <td>$<?= $product['price'] ?></td>
                                            <td><?= $product['quantity'] ?></td>
                                            <td>$<?= $product['total'] ?></td>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td colspan="3" class="align-top px-4 py-5">
                                        <p class="mb-2">
                                            <span class="me-1 fw-semibold">Salesperson:</span>
                                            <span>Alfie Solomons</span>
                                        </p>
                                        <span>Thanks for your business</span>
                                    </td>
                                    <td class="text-end px-4 py-5">
                                        <p class="mb-2">Subtotal:</p>
                                        <p class="mb-2">Tax:</p>
                                        <p class="mb-0">Total:</p>
                                    </td>
                                    <td class="px-4 py-5">
                                        <p class="fw-semibold mb-2">$<?php echo $sub_total; ?></p>
                                        <p class="fw-semibold mb-2">$<?php echo $charges; ?></p>
                                        <p class="fw-semibold mb-0">$<?php echo $total; ?></p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <span class="fw-semibold">Note:</span>
                                    <span>It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance
                                        projects. Thank You!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Invoice -->
                <!-- Invoice Actions -->
                <div class="col-xl-3 col-md-4 col-12 invoice-actions">
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-primary d-grid w-100 mb-3" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                                <span> <a class="button_back" href="<?= base_url('backend/cart/customer_detail'); ?>"> Back </a> </span>
                            </button>
                            <a class="btn btn-label-secondary d-grid w-100 mb-3" target="_blank" href="<?= base_url('backend/cart/cart/' . $obj['id']); ?>">
                                Print
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Invoice Actions -->
            </div>
        </div>
    </div>
</div>
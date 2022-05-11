<link rel="stylesheet" href="<?php echo base_url(); ?>css/dashboard.css">

<section class="px-4 pt-5 mt-4 sec-main my-container">

    <div class="container py-4">

        <?php

if ($this->session->flashdata('msg')) {
    echo '
        <div class="container">
            <div class="alert alert-danger">
                ' . $this->session->flashdata("msg") . '
            </div>
        </div>
        ';
}
?>

        <!-- Welcome Card -->
        <div class="card my-3 mx-lg-5 px-lg-4 shadow py-2" style="">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo base_url(); ?>/public/banner-img.png" class="img-fluid rounded-start"
                        alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title">Welcome</h2>
                        <p class="card-text">Please Wait, Admin will verify you</p>
                        <p class="card-text"><small class="text-muted">Admin will Accept your request within 30
                                minutes</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
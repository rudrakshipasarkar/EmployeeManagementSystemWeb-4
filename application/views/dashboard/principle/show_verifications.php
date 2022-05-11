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

        <!-- Task Card -->
        <div class=" shadow-sm card-task p-3">
            <h4>List of Employees</h4>

            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">Sevarth ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Accept</th>
                        <th scope="col">Decline</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php if (!empty($hod_for_verification_from_principle)) {foreach ($hod_for_verification_from_principle as $employees) {?>
                    <tr>
                        <th scope="row"><?php echo $employees['sevarth_id'] ?></th>
                        <td><?php echo $employees['name'] ?></td>
                        <td>
                            <a href="<?php echo base_url() . 'Principle/PrincipleController/accept_hod_request/' . $employees['sevarth_id'] ?>"
                                style="font-size: 12px; border-radius: 5px" class="btn btn-primary"> Accept
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo base_url() . 'Principle/PrincipleController/decline_hod_request/' . $employees['sevarth_id'] ?>"
                                style="font-size: 12px;  border-radius: 5px"" class=" btn btn-danger">Decline</a>
                        </td>
                    </tr>
                    <?php }} ?>

                    </tr>

                </tbody>
            </table>
        </div>


    </div>


</section>
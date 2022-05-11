<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light border-bottom">
    <div class="container-fluid d-flex align-items-center justify-center">
        <i class="bi bi-list" id="menu-btn"></i>

        <a href="" class="d-flex align-items-center">
            <h5 class="logo-title ms-lg-4">Employee Management System</h5>
        </a>

        <div class="dropdown ms-auto text-end d-flex align-items-center justify-content-center">

            <a href="<?php echo base_url() . "/logout"?>"
                class="d-block link-dark text-decoration-none fw-bold text-black h5" id="dropdownUser1"
                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Go to profile">
                Logout
            </a>
        </div>
    </div>
</nav>
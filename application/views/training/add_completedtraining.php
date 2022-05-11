<link rel="stylesheet" href="<?php echo base_url(); ?>css/training.css">

<body>
<div class="fluid-container add_completedtraining-page mt-5">
	<div class="card card-1">
		<div class="card-body">
			<h5 class="card-title">Add completed trainig</h5>
			<h6 class="card-subtitle mb-2 text-muted ">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" style="color: #6c757d ">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">All Trainings</li>
					</ol>
				</nav>
			</h6>
		</div>
	</div>

	<div class="card card-2">
		<div class="card-body"> 
			<h5 class="card-title">Application form</h5>
			<form method="post" action="">
				<section>

                <div class="row  px-3">
        <div class="col-md-4 col-sm-12">
            <div class="form-group">
                <label>Sevarth ID</label>
                <input name="sevarth_id" type="text"  required="true"
                    autocomplete="off" maxlength="11"  class="form-control mt-3 mb-3">
            </div>
        </div>
        

        <div class="col-md-8 col-sm-12">
			<div class="form-group">
				<label>Name </label>
					<input name="name" type="text" class="form-control mt-3 mb-3"
						required="true"  autocomplete="off" value="Name of the Training">
			</div>
		</div>
										
    </div>

    <div class="row px-3">
        <div class="col-md-4 col-sm-12">
            <div class="form-group">
                <label>Duration </label>
                <input name="duration" type="text" class="form-control mt-3 mb-3" required="true"
                    autocomplete="off">
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="form-group">
                <label>Start Date :</label>
                <input name="start_date" type="date" class="form-control date-picker mt-3 mb-3" required="true"
                    autocomplete="off">
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="form-group">
                <label>End Date :</label>
                <input name="end_date" type="date" class="form-control date-picker mt-3 mb-3" required="true"
                    autocomplete="off">
            </div>
        </div>
    </div>
    
    
    
       
    <div class="row  px-3">
        <div class="col-md-4 col-sm-12">
            <div class="form-group">
                <label>Organization</label>
                <input name="org_name" type="text" class="form-control mt-3 mb-3" required="true"
                    autocomplete="off">
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="form-group">
                <label>Organized By</label>
                <input name="org" type="text" class="form-control mt-3 mb-3" required="true" autocomplete="off">
            </div>
        </div>
    
        <div class="col-md-4 col-sm-12">
            <div class="form-group">
                <label>Certificate</label>
                <input name="comp_certificate" type="file" class="form-control mt-3 mb-3" required="true"
                    autocomplete="off">
            </div>
        </div>
    
    </div>

					<div class="row  px-3">
						<div class="col-md-4 col-sm-12">
							<div class="form-group">
								<div class="justify-content-center">
                                <button type="submit" 
                                 class="btn apply-btn mt-3 mb-3" name="update" id="update" 
                  style="
                      background-color: #524d7d;
                      border-color: #524d7d;
                      color:white;
                      font-weight: 500;
                      font-size: 1rem;">Update</button>
								</div>
							</div>
						</div>
					</div>

				</section>
			</form>
		</div>
	</div>
</div>
</div>
</div>

</body>



<script>
	var menu_btn = document.querySelector("#menu-btn")
	var sidebar = document.querySelector("#sidebar")
	var container = document.querySelector(".add_completedtraining-page")
	menu_btn.addEventListener("click", () => {
		sidebar.classList.toggle("active-nav")
		container.classList.toggle("active-cont")
	})
</script>




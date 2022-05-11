<link rel="stylesheet" href="<?php echo base_url(); ?>css/training.css">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
    <title>Training Module</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>



    <!---Showcase-->
    <section class="bg-light text-dark p-5 p-lg-0 text-center text-sm-start">
    <div class="fluid-container training-page mt-5">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>Welcome to <span class="text-warning">
                            Training Module
                        </span></h1>
                    <p class="lead my=4">
                        All training functionalities at one place
                    </p>
                </div>
               <img src="<?php echo base_url(); ?>/public/img3.svg" class="img-fluid w-25 rounded-start" alt="...">          </div>
        </div>

        <div class="container">
        <div class="row mt-3">
            <div class="col-4 ">
                
                <div class="bg-c-blue card p-3 shadow-sm text-light order-card">
                    <div class="d-flex justify-content-between align-items-center">
                    <i class="fa fa-clipboard fs-3"></i>
                        <div class="card-body">
                            <h5 class="card-title mb=20">Apply for Training</h5>
                            <p class="card-text">Apply for your trainings here and move forward to the next step</p>
                            <a href="#" class="btn btn-primary" onclick="window.open('http://localhost/ems-app1/Training/TrainingController/apply_training')">Apply</a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 ">
                <div class="bg-c-yellow card p-3 shadow-sm text-light order-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <i class="fa fa-upload fs-3"></i>
                        <div class="card-body">
                            <h5 class="card-title">Upload training certificate</h5>
                            <p class="card-text">Upload certificate of your completed trainings .</p>
                            <a href="#" class="btn btn-primary" onclick="window.open('http://localhost/ems-app1/Training/TrainingController/add_certificate')">Upload</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 ">
                <div class="bg-c-green card p-3 shadow-sm text-light order-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <i class="fa fa-clipboard fs-3"></i>
                        <div class="card-body">
                            <h5 class="card-title">Add Completed Trainings</h5>
                            <p class="card-text">Update the list of your completed trainings here !.</p>
                            <a href="#" class="btn btn-primary" onclick="window.open('http://localhost/ems-app1/Training/TrainingController/add_completedtraining')">Update</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="text-dark p-3 text-center">
        <div class="container">
            <div class=".d-md-flex.justify-content-between align-items-center">
                <h5 class="mb-3 mb-md-0 ">Application Status</h5>

            </div>
        </div>
    </section>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/leave.css">


    <div class="card card-2">
        <div class="card-body" style="overflow-x:scroll">
            <h5 class="card-title">Training Applications History</h5>
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th>NAME</th>
                        <th>TRAINING NAME</th>
                        <th>START DATE</th>
                        <th>END DATE</th>
                        <th>HOD STATUS</th>
                        <th>PRINCIPLE STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="profile">
                            
                            <label class="profile-name">Elon Musk</label>
                        </td>
                        <td>WEB DEVELOPMENT</td>
                        <td>2021-05-21</td>
                        <td>2021-05-26</td>
                        <td class="approved">Applied</td>
                        <td class="approved">Applied</td>
                        
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</body>

<script>
        var menu_btn = document.querySelector("#menu-btn")
        var sidebar = document.querySelector("#sidebar")
        var container = document.querySelector(".leave-page")
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav")
            container.classList.toggle("active-cont")
        })
    </script>

<script src="<?php echo base_url();?>js/leave.js"></script>
   
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

<script>
	var menu_btn = document.querySelector("#menu-btn")
	var sidebar = document.querySelector("#sidebar")
	var container = document.querySelector(".training-page")
	menu_btn.addEventListener("click", () => {
		sidebar.classList.toggle("active-nav")
		container.classList.toggle("active-cont")
	})
</script>
</body>

</html>
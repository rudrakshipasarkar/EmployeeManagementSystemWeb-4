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


        
    <div class="fluid-container admin-page mt-5">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">   
        </div>
        
        <section class="text-dark p-3 text-center">
          
        <h2>Applied Trainings</h2>
   
    </section>
        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>
     
    <tr>
      <th scope="row">1</th>
      <td>Elon</td>
      <td>Musk</td>
      <td><button type="button" onclick="window.open('http://localhost/ems-app1/Training/TrainingController/redirect');" class="btn btn-primary">Open</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Emp2</td>
      <td>last_name</td>
      <td><button type="button" onclick="window.open('http://localhost/ems-app1/Training/TrainingController/redirect');" class="btn btn-primary">Open</button></td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>Emp3</td>
      <td>last_name</td>
      <td><button type="button" onclick="window.open('http://localhost/ems-app1/Training/TrainingController/redirect');" class="btn btn-primary">Open</button></td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td>Emp4</td>
      <td>last_name</td>
      <td><button type="button" onclick="window.open('http://localhost/ems-app1/Training/TrainingController/redirect');" class="btn btn-primary">Open</button></td>
    </tr>
    
  </tbody>
</table>

        <div class="container">
        <div class="row mt-3">
            <div class="col-4 ">
                
               <br>
            </div>
        </div>
    </div>
<section>


</section>
   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

<script>
	var menu_btn = document.querySelector("#menu-btn")
	var sidebar = document.querySelector("#sidebar")
	var container = document.querySelector(".admin-page")
	menu_btn.addEventListener("click", () => {
		sidebar.classList.toggle("active-nav")
		container.classList.toggle("active-cont")
	})
</script>
</body>

</html>
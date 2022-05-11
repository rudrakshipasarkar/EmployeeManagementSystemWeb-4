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
  
    <title>Employee Training Details</title>
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


        
    <div class="fluid-container redirect-page mt-5">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">   
        </div>
        
        <section class="text-dark p-3 text-center">
          
        <h1>Employee Training Details</h1><br>


        <form method="post" action=" <?php echo base_url(). 'Training/TrainingController/fetch_data' ?>">

	
			

</section>

<div class="card card-2">
        <div class="card-body" style="overflow-x:scroll">
            <h5 class="card-title">Training Applications History</h5>
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th>Sevarth ID</th>
                        <th>TRAINING NAME</th>
                        <th>START DATE</th>
                        <th>END DATE</th>
                        <th>DURATION</th>
                        <th>ORGANIZATION</th>
                        <th>ORGANIZED BY</th>
                        <th>ACTION</th>
                    </tr>
                </thead>

                <!-- <tbody>
                    <tr>
                        <td>1</td>
                        <td>WEB DEVELOPMENT</td>
                        <td>05/03/2022</td>
                        <td>05/13/2022</td>
                        <td>2 week</td>
                        <td>GPA</td>
                        <td>GPA</td>
                        <td><button type="button" class="btn btn-primary">Approve</button></td>
</tr>
</tbody> -->

                <tbody>

                 <?php
                   $i=1;
                   $data=array();
                      foreach( $data as $row)
                    {
                         echo "<tr>";
                         //echo "<td>".$i."</td>";
                         echo "<td>".$row->sevarth_id."</td>";
                         echo "<td>".$row->name."</td>";
                         echo "<td>".$row->duration."</td>";
                         echo "<td>".$row->start_date."</td>";
                         echo "<td>".$row->end_date."</td>";
                         echo "<td>".$row->org_name."</td>";
                         echo "<td>".$row->organized_by."</td>";
                         echo "</tr>";
                        $i++;
                    }
                    ?> 
                </tbody>
            </table>
        </div>
    </div>
   
    </section>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

<script>
	var menu_btn = document.querySelector("#menu-btn")
	var sidebar = document.querySelector("#sidebar")
	var container = document.querySelector(".redirect-page")
	menu_btn.addEventListener("click", () => {
		sidebar.classList.toggle("active-nav")
		container.classList.toggle("active-cont")
	})
</script>
</body>

</html>
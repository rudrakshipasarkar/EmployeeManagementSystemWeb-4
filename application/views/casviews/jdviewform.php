<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/public/assets/cas_style.css">
	<title>Hello, world!</title>

</head>
<body>
<?php foreach ($view->result() as $row):?>
<div class="container pb-4">
	<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-4">
  		<a class="btn btn-danger me-md-2" type="button" href="<?= base_url('cascontroller/formcontroller/dto');?>">Back</a>
	</div>
    <div class="main-body">    
        <div class="row gutters-sm">
            <div class="col-md-5 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h2> Personal Details </h2>
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Full Name</h6>
                                    </div>
                                    <div class="col-md-6 text-secondary p-2">
                                        <?= $row->Firstname?> <?= $row->Middlename?> <?= $row->Surname?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Email</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
										<?= $row->Email?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Phone</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
										<?= $row->Phone?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Designation</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->Designation?> 
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Date of Birth</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->DOB?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Age</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->Age?>   
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Gender</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->Gender?>   
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Date of Joining</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->DOJ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Employee Code</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->EmployeeCode?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Branch</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->Branch?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Address</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->Address?>, <?= $row->State?>, <?= $row->City?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Pincode</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->Pincode?>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-7">
                <div class="card mb-4">
                    <div class="card-body">
                        <div>
                            <h2> Professional Details </h2>
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Degree</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                         
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Passing Year </h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                         
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Date of Probession </h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->Probession?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">GR No.</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->GRNo?>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <div>
                            <h2> Previous Service Details </h2>
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Institute Name </h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->InstituteName?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Service Start Date</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->ServiceStartDate?> 
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Service End Date</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->ServiceEndDate?>   
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Proof</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->Proof?>  
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gutters-sm">
            <div class="col-md-6 mb-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <div>
                            <h2> Training Details </h2>
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Training Name</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->TrainingName?> 
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Sponsored By</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->SponsoredBy?>  
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Type</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->Type?>  
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Duration</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->Duration?>  
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Start Date</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->StartDate?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">End Date</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->EndDate?> 
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Proof</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                         
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card mb-4">
                    <div class="card-body">
                    <div>
                            <h2> CR Details </h2>
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">CR Start Date</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->CRStartDate?>    
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">CR End Date</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->CREndDate?> 
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="mb-0 p-2">Grade</h6>
                                    </div>
                                    <div class="col-md-6  text-secondary p-2">
                                    <?= $row->Grade?> 
                                    </div>
                                </div>
                                <hr>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="d-grid gap-2 d-md-flex justify-content-center mb-4">
        <?php if($row->status == '2'): ?>
  		    <a class="btn btn-success" style="width:125px;" type="button" href="<?= base_url('cascontroller/formcontroller/updatejd/'.$row->Id.'/'.$row->Email);?>">Approve</a>
            <a class="btn btn-danger" style="width:125px;"  type="button" href="<?= base_url('cascontroller/formcontroller/jdreject/'.$row->Id);?>">Reject</a>
        <?php elseif($row->status == '4'): ?>
            <a class="btn btn-danger" style="width:125px;"  type="button" href="#">Rejected</a>
        <?php else:?>
            <a class="btn btn-success" style="width:125px;" type="button" href="#">Approved</a>
            <a class="btn btn-danger" style="width:125px;"  type="button" href="<?= base_url('cascontroller/formcontroller/revertJd/'.$row->Id);?>">Revert</a>
        <?php endif ?>
	</div>
</div>
<?php endforeach;?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
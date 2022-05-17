
<div class="container">
    <h2 class="pt-5 text-white">Cas Applications</h2>
	<div class="container pt-3">
        <div class="tab-content mt-3">
            <div class="tab-pane active" id="Cas_Applications">
                <div class="panel panel-default">
                    <div class="panel-body">
                <?php if(($applications) > 0): ?>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th class="text-center">Sr No.</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Email</th>
                      <th class="text-center">Employee Code</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; foreach($applications as $applications): ?>
                    <tr>
                        <td class="align-middle text-center">
                            <div class="bg-light d-inline-flex justify-content-center align-items-center align-top" style="width: 35px; height: 35px; border-radius: 3px;"><?= $i;?></div>
                        </td>
                        <td class="text-center align-middle"><?= $applications->Firstname;?> <?= $applications->Middlename;?> <?= $applications->Surname;?></td>
                        <td class="text-center align-middle" ><?= $applications->Email;?></td>
                        <td class="text-center align-middle"><?= $applications->EmployeeCode;?></td>
                        
                        <td class="text-center align-middle">
                        <?php if($applications->status == '0'): ?>
                            <a class="text-info" style="margin-right: 10px;padding: 10px;font-size: 18px;text-decoration: none;" id="view_form" href="<?= base_url('cascontroller/formcontroller/viewDetails/'.$applications->Id) ?>" id="view_form"><i class="fa fa-eye" style="margin-right: 10px;" aria-hidden="true"></i>View Form</a>
                        <?php elseif($applications->status == '4'):?>
                            <a class="text-info" style="font-size: 18px;text-decoration: none;" id="view_form" href="<?= base_url('cascontroller/formcontroller/viewDetails/'.$applications->Id) ?>" id="view_form"><i class="fa fa-eye" style="margin-right: 10px;" aria-hidden="true"></i></a>
                            <a class="text-danger"  href="#" style="margin-right: 10px;padding: 10px;font-size: 18px;" id="approved"> <i class="fa fa-times-circle" aria-hidden="true"></i> Rejected</a>
                        <?php else: ?>
                            <a class="text-info" style="font-size: 18px;text-decoration: none;" id="view_form" href="<?= base_url('cascontroller/formcontroller/viewDetails/'.$applications->Id) ?>" id="view_form"><i class="fa fa-eye" style="margin-right: 10px;" aria-hidden="true"></i></a>
                            <a class="text-success"  href="#" style="margin-right: 10px;padding: 10px;font-size: 18px;" id="approved"> <i class="fa fa-check-circle" aria-hidden="true"></i> Approved</a>
                        <?php endif ?>
                        </td>
                    </tr>
                    <?php $i++;?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                <?php else:?>
                    <h1 style="padding: 10px;"> NO Records Found </h1>  
                <?php endif ?>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

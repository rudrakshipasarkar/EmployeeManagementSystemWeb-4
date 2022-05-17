<?php foreach ($status->result() as $row):?>
<div class="container">
    <h2 class="pt-5 text-white">Applied Applications</h2>
	<div class="container box pt-5">
        <ul class="nav nav-tabs flex-row">
            <li class="nav-item">
                <a class="nav-link active" href="#" id="click_Applied_Applications">Applied Applications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="click_Under_Scrutiny">Under Scrutiny Applications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="click_Approved_Applications">Approved Applications</a>
            </li>
        </ul>

        <div class="tab-content mt-3">
            <div class="tab-pane active" id="Applied_Applications">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Sr No.</th>
                                    <th scope="col">Sevarth Id</th>
                                    <th scope="col">Application Type</th>
                                    <th scope="col">Application No.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>#</td>
                                    <td>#</td>
                                    <td>#</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="Under_Scrutiny">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-hover bdr">
                            <thead>
                                <tr>
                                    <th scope="col">Sr No.</th>
                                    <th scope="col">Sevarth ID</th>
                                    <th scope="col">Application Type</th>
                                    <th scope="col">Application Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>#</td>
                                    <td>CAS Application</td>
                                    <td>
                                    <?php if($row->status < '4'): ?>    
                                    <input type="button" class="btn btn-sm btn-primary" id="view_status" value="View Status">
                                    <?php else:?>
                                    <button class="btn btn-sm btn-danger"><a href="<?= base_url('cascontroller/formcontroller/index');?>" class="text-white">Re-Apply</a></button>
                                    <?php endif ?>
                                </td>
                                </tr>
                                <div id="myModal1" class="modal1">
                                    <div class="modal-content1 d-flex justify-content-center">
                                        <div class="modal-body1" id="print">
                                            <span class="close1">&times;</span>
                                            <h5 class="formStatusheading"> Form Status <h5>
                                            <?php if($row->status == '0'):?>
                                            <div class="progress-bar1">
                                                <div class="step">
                                                    <p>Principal</p>
                                                    <div class="bullet">
                                                        <span>1</span>
                                                    </div>
                                                    <div class="check fa fa-check"></div>
                                                </div>
                                                <div class="step">
                                                    <p>Joint Director</p>
                                                    <div class="bullet">
                                                        <span>2</span>
                                                    </div>
                                                    <div class="check fa fa-check"></div>
                                                </div>
                                                <div class="step">
                                                    <p>Director</p>
                                                    <div class="bullet">
                                                        <span>3</span>
                                                    </div>
                                                    <div class="check fa fa-check"></div>
                                                </div>
                                            </div>
                                            <?php elseif($row->status == '1'): ?>
                                            <div class="progress-bar1">
                                                <div class="step">
                                                    <p>Principal</p>
                                                    <div class="bullet active">
                                                        <span>1</span>
                                                    </div>
                                                    <div class="check fa fa-check active"></div>
                                                </div>
                                                <div class="step">
                                                    <p>Joint Director</p>
                                                    <div class="bullet">
                                                        <span>2</span>
                                                    </div>
                                                    <div class="check fa fa-check"></div>
                                                </div>
                                                <div class="step">
                                                    <p>Director</p>
                                                    <div class="bullet">
                                                        <span>3</span>
                                                    </div>
                                                    <div class="check fa fa-check"></div>
                                                </div>
                                            </div>
                                            <?php elseif($row->status == '2'): ?>
                                            <div class="progress-bar1">
                                                <div class="step">
                                                    <p>Principal</p>
                                                    <div class="bullet active">
                                                        <span>1</span>
                                                    </div>
                                                    <div class="check fa fa-check active"></div>
                                                </div>
                                                <div class="step">
                                                    <p>Joint Director</p>
                                                    <div class="bullet active">
                                                        <span>2</span>
                                                    </div>
                                                    <div class="check fa fa-check active"></div>
                                                </div>
                                                <div class="step">
                                                    <p>Director</p>
                                                    <div class="bullet">
                                                        <span>3</span>
                                                    </div>
                                                    <div class="check fa fa-check"></div>
                                                </div>
                                            </div>
                                            <?php else: ?>
                                            <div class="progress-bar1">
                                                <div class="step">
                                                    <p>Principal</p>
                                                    <div class="bullet active">
                                                        <span>1</span>
                                                    </div>
                                                    <div class="check fa fa-check active"></div>
                                                </div>
                                                <div class="step">
                                                    <p>Joint Director</p>
                                                    <div class="bullet active">
                                                        <span>2</span>
                                                    </div>
                                                    <div class="check fa fa-check active"></div>
                                                </div>
                                                <div class="step">
                                                    <p>Director</p>
                                                    <div class="bullet active">
                                                        <span>3</span>
                                                    </div>
                                                    <div class="check fa fa-check active"></div>
                                                </div>
                                            </div>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="Approved_Applications">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-hover bdr">
                            <thead>
                                <tr>
                                    <th scope="col">Sr No.</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Approved Application</th>
                                    <th scope="col">Application No.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>#</td>
                                    <td>#</td>
                                    <td>#</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>
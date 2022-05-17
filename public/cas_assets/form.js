$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
};

$(".submit").click(function(){
return false;
});



$("#addRow").click(function () {
        var html = '';
        html += '<div class="row mb-4">';
        html += '<div class="form-group col-md-4">';
        html += '<label for="exampleInputPassword3" class="form-label">Institute Name:<span style="color: darkred;"> *</span></label> ';
        html += '<input type="text" class="form-control" id="exampleInputPassword3" name="InstituteName" placeholder="Institute Name">';
        // html += '<span class="alert-danger"><?= json_encode(display_error($validation, 'InstituteName'));?></span>';
        html += '</div>';
        html += '<div class="form-group col-md-4">';
        html += '<label class="form-label">Service Starting Date:<span style="color: darkred;"> *</span></label> ';
        html += '<input type="date" name="ServiceStartDate" placeholder="Start Date" />';
        html += '</div>';
        html += '<div class="form-group col-md-4">';
        html += '<label class="form-label">Service End Date:<span style="color: darkred;"> *</span></label> ';
        html += '<input type="date" name="ServiceEndDate" placeholder="End Date" />';
        html += '</div>';
        html += '</div>';

        html += '<div class="row mb-4">';
        html += '<div class="form-group col-md-6">';
        html += '<label for="upload" class="form-label">Upload Proof Here<span style="color: darkred;"> *</span></label>';
        html += '<input type="file" class="form-control" id="upload" naem="Proof" multiple>';
        html += '</div>';
        html += '<div class="form-group col-md-4">';
        html += '<button id="uploadbtn" type="button" class="btn btn-info btn-md text-light">View Document</button>';
        html += '</div>';
        html += '</div>';

        $('#newRow').append(html);
});

$("#addRow1").click(function () 
{
        var html = '';
        html += '<div class="row">';
        html += '<div class="form-group col-4">';
        html += '<label class="fieldlabels">Training Name: *</label>';
        html += '<input type="text" name="iname" placeholder="Training Name" />';
        html += '</div>';
        html += '<div class="form-group col-4">';
        html += '<label class="fieldlabels">Sponsored By: *</label> ';
        html += '<input type="text" name="iname" placeholder="Sponsored By" />';
        html += '</div>';
        html += '<div class="form-group col-4">';
        html += '<label class="fieldlabels">Type Of Training: *</label> ';
        html += '<select class="custom-select custom-select-md">';
        html += '<option value="select">--Select--</option>'
        html += '<option value="FDP">FDP</option>';
        html += '<option value="Information Technology">Industrial Training</option>';
        html += '<option value="Mechanical">Workshop</option>';
        html += '</select>';
        html += '</div>';
        html += '</div>';

        html += '<div class="row">';
        html += '<div class="form-group col-4">';
        html += '<label class="fieldlabels">Duration: *</label> ';
        html += '<select class="custom-select custom-select-md">';
        html += '<option >--Select--</option>';
        html += '<option value="1 Week">1 Week</option>';
        html += '<option value="2 Week">2 Week</option>';
        html += '<option value="3 Week">3 Week</option>';
        html += '<option value="4 Week">4 Week</option>';
        html += '</select>';
        html += '</div>';
        html += '<div class="form-group col-4">';
        html += '<label class="fieldlabels">Start Date: *</label>';
        html += '<input type="date" name="iname" placeholder="Start Date" />';
        html += '</div>';
        html += '<div class="form-group col-4">';
        html += '<label class="fieldlabels">End Date: *</label> ';
        html += '<input type="date" name="iname" placeholder="End Date" />';
        html += '</div>';
        html += '</div>';

        $('#add').append(html);
});

$("#addRow2").click(function () {

     var html = '';

        html += '<div class="row">';
        html += '<div class="form-group col-4">';
        html += '<label class="fieldlabels">CR Start Date: *</label>';
        html += '<input type="date" name="iname" placeholder="Start Date">';
        html += '</div>';
        html += '<div class="form-group col-4">';
        html += '<label class="fieldlabels">CR End Date: *</label>';
        html += ' <input type="date" name="iname" placeholder="End Date">';
        html += '</div>';
        html += '<div class="form-group col-4">';
        html += ' <label class="fieldlabels">Grade: *</label>';
        html += '<input type="text" name="iname" placeholder="Grade">';
        html += '</div> ';
        html += '</div> ';

        $('#add1').append(html);

});

});


// $(document).on('click', '#removeRow', function () {
//         $(this).closest('#inputFormRow').remove();
//     });
$(document).ready(function(){

$('#click_Applied_Applications').click(function()
   {
   $('#click_Applied_Applications').addClass('active');
   $('#click_Under_Scrutiny').removeClass('active');
   $('#click_Approved_Applications').removeClass('active');
   $('#click_Applied_Applications').removeClass('fade');

   $('#Applied_Applications').addClass('active');
   $('#Applied_Applications').removeClass('fade');
   $('#Applied_Applications').removeClass('fade');

   $('#Under_Scrutiny').removeClass('active');
   $('#Approved_Applications').removeClass('active');   

});

$('#click_Under_Scrutiny').click(function()
   {
   $('#click_Under_Scrutiny').addClass('active');
   $('#click_Applied_Applications').removeClass('active');
   $('#click_Approved_Applications').removeClass('active');
   $('#click_Under_Scrutiny').removeClass('fade');

   $('#Under_Scrutiny').addClass('active');
   $('#Under_Scrutiny').removeClass('fade');
   $('#Under_Scrutiny').removeClass('fade');

   $('#Applied_Applications').removeClass('active');
   $('#Approved_Applications').removeClass('active');   

});

$('#click_Approved_Applications').click(function()
   {
   $('#click_Approved_Applications').addClass('active');
   $('#click_Applied_Applications').removeClass('active');
   $('#click_Under_Scrutiny').removeClass('active');
   $('#click_Approved_Applications').removeClass('fade');

   $('#Approved_Applications').addClass('active');
   $('#Approved_Applications').removeClass('fade');
   $('#Approved_Applications').removeClass('fade');

   $('#Applied_Applications').removeClass('active');
   $('#Under_Scrutiny').removeClass('active');   

});

});


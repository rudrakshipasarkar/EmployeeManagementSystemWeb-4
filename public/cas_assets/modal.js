// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
// var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var click = document.getElementById("click");


// When the user clicks the button, open the modal 
var btn = document.getElementById("myBtn");


btn.onclick = function () {
  modal.style.display = "block";
  var surname = document.getElementById("surname").value;
  var firstname = document.getElementById("firstname").value;
  var middlename = document.getElementById("middlename").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var dob = document.getElementById("dob").value;
  var age = document.getElementById("age").value;
  var gender = document.getElementById("gender").value;
  var doj = document.getElementById("doj").value;
  var employeecode = document.getElementById("employeecode").value;
  var branch = document.getElementById("branch").value;
  var address = document.getElementById("address").value;
  var state = document.getElementById("state").value;
  var city = document.getElementById("city").value;
  var taluka = document.getElementById("taluka").value;
  var village = document.getElementById("village").value;
  var pincode = document.getElementById("pincode").value;
  var dop = document.getElementById("dop").value;
  var gr = document.getElementById("gr").value;
  var insname = document.getElementById("insname").value;
  var ssd = document.getElementById("ssd").value;
  var sed = document.getElementById("sed").value;
  var trainingname = document.getElementById("trainingname").value;
  var sponsoredby = document.getElementById("sponsoredby").value;
  var type = document.getElementById("type").value;
  var duration = document.getElementById("duration").value;
  var sd = document.getElementById("sd").value;
  var ed = document.getElementById("ed").value;
  var crsd = document.getElementById("crsd").value;
  var cred = document.getElementById("cred").value;
  var grade = document.getElementById("grade").value;



  document.getElementById("name").innerHTML = surname + " " + firstname + " " + middlename;
  document.getElementById("Email").innerHTML = email;
  document.getElementById("Phone").innerHTML = phone;
  document.getElementById("Dob").innerHTML = dob;
  document.getElementById("Age").innerHTML = age;
  document.getElementById("Gender").innerHTML = gender;
  document.getElementById("Doj").innerHTML = doj;
  document.getElementById("Code").innerHTML = employeecode;
  document.getElementById("Branch").innerHTML = branch;
  document.getElementById("Address").innerHTML = address;
  document.getElementById("State").innerHTML = state;
  document.getElementById("City").innerHTML = city;
  document.getElementById("Taluka").innerHTML = taluka;
  document.getElementById("Village").innerHTML = village;
  document.getElementById("Pincode").innerHTML = pincode;
  document.getElementById("Dop").innerHTML = dop;
  document.getElementById("Gr").innerHTML = gr;
  document.getElementById("Insname").innerHTML = insname;
  document.getElementById("Ssd").innerHTML = ssd;
  document.getElementById("Sed").innerHTML = sed;
  document.getElementById("Trainingname").innerHTML = trainingname;
  document.getElementById("Sponsoredby").innerHTML = sponsoredby;
  document.getElementById("Type").innerHTML = type;
  document.getElementById("Duration").innerHTML = duration;
  document.getElementById("Sd").innerHTML = sd;
  document.getElementById("Ed").innerHTML = ed;
  document.getElementById("Crsd").innerHTML = crsd;
  document.getElementById("Cred").innerHTML = cred;
  document.getElementById("Grade").innerHTML = grade;
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

click.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}












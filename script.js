$(document).ready(function(){
  $('.checkbtn').click(function(){
      $('ul').toggleClass('show');
  });
});

/********************* for year in user_details page ********************/

const yearSelect = document.getElementById("year");

function populateYears(){
  //Get the current year as a number
  let year = new Date().getFullYear();
  //make the previous 100 years be an option
  for(let i = 0; i < 101; i++){
      const option = document.createElement("option");
      option.textContent = year-i;
      yearSelect.appendChild(option);
  }
}
populateYears();

/******************* for extra option "other" in drop down menu *************/

function toggleOther(){
  var deg = document.getElementById('toToggle');
  var strUser = deg.options[deg.selectedIndex].text;

  if (strUser == 'Other'){
      document.getElementById('extra-option').disabled = false;
  }else{
      document.getElementById('extra-option').disabled = true;
  }
}


function login_validation() {
  var fname = document.getElementById("fname").value;

  if (fname == "") {
    document.getElementById("fname1").innerHTML = "*field is empty";
    return false;
  } else if (fname.length > 20) {
    document.getElementById("fname1").innerHTML =
      "**enterd value is more than 20";
    return false;
  } else if (!isNaN(fname)) {
    document.getElementById("fname1").innerHTML =
      "***please enter only letters";
    return false;
  } else {
    document.getElementById("fname1").innerHTML = "";
  }


  var text = document.getElementById("reg").value;
  console.log(text);
  var regx = /^\d{13}$/;
  if (regx.test(text) == false) {
    document.getElementById("reg1").innerHTML = "invalid";
    return false;
  } else {
    document.getElementById("reg1").innerHTML = "";
  }

  var fpassword = document.getElementById("fpassword").value;
  if (fpassword == "") {
      document.getElementById("fpassword1").innerHTML = "*field is empty";
      return false;
    } else if (fpassword.length > 20) {
      document.getElementById("fpassword1").innerHTML =
        "**enterd value is more than 20";
      return false;
    }else if (fpassword.length < 5) {
      document.getElementById("fpassword1").innerHTML =
        "**Password too short";
      return false;
    }else {
      document.getElementById("fpassword1").innerHTML = "";
    }

    var cpassword = document.getElementById("cpassword").value;
    if (cpassword == fpassword) {
      document.getElementById("cpassword1").innerHTML = "";
      
    }else {
      document.getElementById("cpassword1").innerHTML = "*Not Match";
      return false;
    }
  var fphone = document.getElementById("fphone").value;
  console.log(fphone);
  var reg = /^[7-9]\d{9}$/;
  if (reg.test(fphone) == false || fphone == "") {
    document.getElementById("fphone1").innerHTML = "Invalid";
    return false;
  } else {
    document.getElementById("fphone1").innerHTML = "valid";
  }

}

function triggerClick(e) {
  document.querySelector('#profileImage').click();
}
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}

const myslide=document.querySelectorAll('.myslider');
    dot=document.querySelectorAll('.dot');

let counter=1;
slidefun(counter);

let timer =setInterval(autoslide, 8000);

function autoslide(){
  counter+=1;
  slidefun(counter);
}
function plusSlides(n){
  counter+=n;
  slidefun(counter);
  resetTimer();

}

function currentSlide(n){
  counter=n;
  slidefun(counter);
  resetTimer();
}


function resetTimer(n){
  clearInterval(timer);
  timer =setInterval(autoslide, 8000);
}

function slidefun(n){
  let i;
  for(i=0;i<myslide.length;i++){
    myslide[i].style.display="none";
  }
  for(i=0;i<dot.length;i++){
    dot[i].classList.remove('active');
  }
  if(n>myslide.length){
    counter=1;
  }
  if(n<1){
    counter=myslide.length;
  }
  myslide[counter-1].style.display="block";
  dot[counter=1].classList.add('active');
}

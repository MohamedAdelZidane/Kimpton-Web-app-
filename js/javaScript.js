var username = document.forms["vform"]["username"];
var email = document.forms["vform"]["email"];
var password = document.forms["vform"]["password"];
var password_confirmation = document.forms["vform"]["password_confirmation"];


var name_error = document.getElementById("name_error");
var email_error = document.getElementById("email_error");
var password_error = document.getElementById("password_error");


username.addEventListener("blur", nameVerify,true);
email.addEventListener("blur", emailVerify,true);
password.addEventListener("blur", passwordVerify,true);


function Validate(){
    if(username.value == ""){
        username.style.border = "1px solid red";
        name_error.textContent = "username is required";
        username.focus();
        return false;
    }
    
    if(email.value == ""){
        email.style.border = "1px solid red";
        email_error.textContent = "email is required";
        email.focus();
        return false;
    }
    
    if(password.value == ""){
        password.style.border = "1px solid red";
        password_error.textContent = "password is required";
        password.focus();
        return false;
    }
}


function nameVerify(){
    
    if(username.value != ""){
        username.style.border = "1px solid #5E6E66";
        name_error.innerHTML = "";
        return true;
    }
}


function emailVerify(){
    
    if(email.value != ""){
        email.style.border = "1px solid #5E6E66";
        email_error.innerHTML = "";
        return true;
    }
}


function passwordVerify(){
    
    if(password.value != ""){
        password.style.border = "1px solid #5E6E66";
        password_error.innerHTML = "";
        return true;
    }
}


var username2 = document.forms["vform"]["username2"];
var password2 = document.forms["vform"]["password"];


var name2_error = document.getElementById("name2_error");
var password2_error = document.getElementById("password2_error");


username2.addEventListener("blur", nameVerify2,true);
password2.addEventListener("blur", passwordVerify2,true);


function Validate(){
    if(username2.value == ""){
        username.style.border = "1px solid red";
        name2_errorerror.textContent = "username is required";
        username2.focus();
        return false;
    }
    
    
    if(password2.value == ""){
        password2.style.border = "1px solid red";
        password2_error.textContent = "password is required";
        password2.focus();
        return false;
    }
}


function nameVerify2(){
    
    if(username2.value != ""){
        username2.style.border = "1px solid #5E6E66";
        name2_error.innerHTML = "";
        return true;
    }
}




function passwordVerify2(){
    
    if(password2.value != ""){
        password2.style.border = "1px solid #5E6E66";
        password2_error.innerHTML = "";
        return true;
    }
}


var myObj = {"name":"Mohamed", "age" :21, "city":"cairo"};
var myJSON = JSON.stringify(myObj);
window.location = "first Project_JSON.php? x=" + myJSON;


var myJSON = {"employees":["mohamed","ahmed","mahmoud"]};
var myObj = JSON.parse(myJSON);
document.getElementById("demo").innerHTML = myObj.name;



function menuFunction(){
    
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')){
        
        var myDropdown = document.getElementById("myDropdown");
        
        if(myDropdown.classList.contains('show')){
            myDropdown.classList.remove('show');
        }
    }
}


								
var slideIndex = 0;

showSlides();


function showSlides() {

    var i;
	
    var slides = document.getElementsByClassName("mySlides");
	
    var dots = document.getElementsByClassName("dot");
	
    for (i = 0; i < slides.length; i++) {

        slides[i].style.display = "none";  
		
    }

    slideIndex++;

    if (slideIndex> slides.length) {slideIndex = 1}    
	
    
    for (i = 0; i < dots.length; i++) {
	
    
        dots[i].className = dots[i].className.replace(" active", "")				}
		
    slides[slideIndex-1].style.display = "block";  
	
    dots[slideIndex-1].className += " active";
	
    setTimeout(showSlides, 10000); // Change image every 2 seconds
	
}

function on(){
    document.getElementById("overlay").style.display = "block";
}

function on(){
    document.getElementById("overlay2").style.display = "block";
}

function off(){
    document.getElementById("overlay").style.display = "none";
}

function off(){
    document.getElementById("overlay2").style.display = "none";
}




function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;

showSlides(slideIndex);


function plusSlides(n) {

    showSlides(slideIndex += n);
}

function currentSlide(n) {
  
    showSlides(slideIndex = n);
}




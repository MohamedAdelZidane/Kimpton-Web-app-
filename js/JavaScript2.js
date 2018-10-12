function validateForm() {

    var x = document.forms["myForm"]["firstname"].value;
	
    if (x == "") {
        alert("First name must be filled out");
        return false;
    }
	var y = document.forms["myForm1"]["lastname"].value;
	if (y == "") {
        alert("Last Name must be filled out");
        return false;
    }
	var z = document.forms["myForm2"]["Email"].value;
	if (z == "") {
        alert("Email must be filled out");
        return false;
    }
		var t = document.forms["myForm3"]["comments"].value;
	if (t == "") {
        alert("Comments and requests must be filled out");
        return false;
    }
	
}
function validateForm() {
	var username = document.forms[0]["username"].value;
	var email = document.forms[0]["email"].value;
	var password = document.forms[0]["password"].value;
	var confirm_password = document.forms[0]["confirm_password"].value;

	if (username == "") {
		alert("Username must be filled out");
		return false;
	}

	if (email == "") {
		alert("Email must be filled out");
		return false;
	}

	if (password == "") {
		alert("Password must be filled out");
		return false;
	}

	if (password != confirm_password) {
		alert("Passwords do not match");
		return false;
	}

	return true;
}

document.forms[0].addEventListener("submit", function(event) {
	event.preventDefault();
	if (validateForm()) {
		alert("Account created successfully!");
	}
});

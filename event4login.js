var loginBtn = document.getElementById("toggle");
var form = document.getElementById("toggleMe");
var mainForm = document.getElementById("mainForm");
var signup = document.getElementById("signup");


function dispForm() {
	form.style["display"] = "block";
	signup.style["display"] = "none";
	loginBtn.style["margin-left"] = "35%";
	loginBtn.style["margin-top"] = "-15px";

}

function hideForm() {
	form.style["display"] = "none";
	signup.style["display"] = "inline";
	loginBtn.style["margin"] = "0%";

}

loginBtn.addEventListener("mouseover", dispForm);
mainForm.addEventListener("mouseleave", hideForm);

// to move label if input is hovered or filled

function changLabelPos(labelName, inptName) {
	let label = document.getElementById(labelName);
	let input = document.getElementById(inptName);

	function placeLabel() {
		label.style.left = "0%";
		label.style.color = "#fff";
	}

	input.addEventListener("focus", placeLabel);
}


changLabelPos("change-pos1", "on-hover-change-pos1")
changLabelPos("change-pos2", "on-hover-change-pos2")

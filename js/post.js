// Validating Empty Field
function check_empty() {
if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") {
alert("Fill All Fields !");
} else {
document.getElementById('form').submit();
alert("Form Submitted Successfully...");
}
}
//Function To Display Popup
function div_show(id) {
   
    alert(id);
	document.getElementById('popup_div').style.display = "block";

}
//Function to Hide Popup
function div_hide(){
document.getElementById('popup_div').style.display = "none";
}

function post(message){
	var ans = document.getElementById("div_answer");
	ans.innerHTML = message;


}

function id(id){
	alert(id);
}
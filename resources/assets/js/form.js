var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// when user clicks checkbox, it'll show pass
function showpass(){
	var x= document.getElementById("pass");
	if(x.type==="password")
		x.type="text";
	else
		x.type="password";
}